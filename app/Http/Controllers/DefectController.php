<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

# Add the Models
use App\Assignment; # Add the Assignment Model
use App\Submitter; # Add the Submitter Model
use App\Environment; # Add the Environment Model
use App\State; # Add the State Model
use App\Priority; # Add the Priority Model
use App\Component; # Add the Component Model
use App\Cause; # Add the Cause Model
use App\Note; # Add the Note Model
use App\Defect; # Add the Defect Model
use App\Tag; # Add the Tag Model

# Add Session to provide user feedback
use Session;

class DefectController extends Controller
{

    /**
    * GET
    * /
    */
    public function index() {

        #Eager load the priority and state with the defects
        $defects = Defect::where('active', '=', 1)
            ->with('state')->get();

        return view('defects.index')->with(['defects' => $defects]);

    }

    /**
    * GET
    * /books/new
    */
    public function enterNewDefect(Request $request) {

        # Get the data to build the dynamic form elements
        $assignmentsForDropdown = Assignment::getAssignmentsForDropdown();
        $submittersForDropdown = Submitter::getSubmittersForDropdown();
        $environmentsForRadio = Environment::getEnvironmentsForRadio();
        $statesForDropdown = State::getStatesForDropdown();
        $prioritiesForDropdown = Priority::getPrioritiesForDropdown();
        $componentsForDropdown = Component::getComponentsForDropdown();
        $causesForDropdown = Cause::getCausesForDropdown();
        $tagsForCheckboxes = Tag::getTagsForCheckboxes();

        # Return the 'new' view
        return view('/defects/new')->with([
            'assignmentsForDropdown' => $assignmentsForDropdown,
            'submittersForDropdown' => $submittersForDropdown,
            'environmentsForRadio' => $environmentsForRadio,
            'statesForDropdown' => $statesForDropdown,
            'prioritiesForDropdown' => $prioritiesForDropdown,
            'componentsForDropdown' => $componentsForDropdown,
            'causesForDropdown' => $causesForDropdown,
            'tagsForCheckboxes' => $tagsForCheckboxes,
        ]);

    }

    /**
    * POST
    * /books/new
    */

    public function createNewDefect(Request $request) {

        # Validate the form data.
        $this->validate($request, [
            'title' => 'required|min:10',
            'description' => 'required|min:10',
            'assignment_id' => 'required|integer',
            'found_in_version' => 'required|max:12',
            'submitter_id' => 'required|integer',
            'environment_id' => 'required|integer',
            'state_id' => 'required|integer',
            'priority_id' => 'required|integer',
            'component_id' => 'required|integer',
            'cause_id' => 'required|integer',
            'note' => 'required|min:10',
        ]);

        # Insert new defect into the database
        $defect = new Defect();
        $defect->title = $request->title;
        $defect->description = $request->description;
        $defect->assignment_id = $request->assignment_id;
        $defect->found_in_version = $request->found_in_version;
        $defect->submitter_id = $request->submitter_id;
        $defect->environment_id = $request->environment_id;
        $defect->state_id = $request->state_id;
        $defect->priority_id = $request->priority_id;
        $defect->component_id = $request->component_id;
        $defect->cause_id = $request->cause_id;

        $defect->save();

        # Find the recently added Defect and add the 'Created Defect' note.
        $result = Defect::orderBy('id', 'desc')->first();

        #insert the creation note in the notes table
        $note = new Note;
        $note->post = "Defect Created [recorded: ".$result->created_at."].  "
            .$request->note."  [recorded: ".$result->created_at."]";
        $note->defect_id = $result->id;

        $note->save();

        #update the defect tab pivot table
        $tags = ($request->tags) ?: [];
        # Sync tags
        $defect->tags()->sync($tags);
        $defect->save();

        # Provide a confirmation message to the user.
        session::flash('message','Defect Added.');

        # Redirect the user to the backlog.
        return redirect('/');

    }


    /**
    * GET
    * /defects/delete/{id}
    */
    public function confirmDeleteDefect($id) {

        # Find the specific defect requested to delete
        $defect = Defect::find($id);

        # If the defect does not exist then flash the user the alert message
        if(!$defect) {
            Session::flash('message',
                'Unable to delete the requested item. The record was not found.');
            return redirect('/');
        }
        return view('defects.delete')->with('defect', $defect);

    }

    /**
    * POST
    * /defects/delete
    */
    public function hideDefect(Request $request) {

        $defect = Defect::find($request->id);

        # 'Soft' delete the record by setting the active value to false.
        $defect->deleted_at = \Carbon\Carbon::now();
        $defect->active = 0;

        $defect->save();

        Session::flash('message',
            'You successfully deleted defect '.$request->id.'!');
        return redirect('/');

    }

    /**
    * GET
    * /defects/edit/{id}
    */
    public function editDefect($id, Request $request) {

        # Find the specific defect requested to delete
        $defect = Defect::find($id);

        # If the defect does not exist then flash the user the alert message
        if(!$defect) {
            Session::flash('message',
                'Unable to find the requested item. The record was not found.');
            return redirect('/');
        }

        $assignmentsForDropdown = Assignment::getAssignmentsForDropdown();
        $submittersForDropdown = Submitter::getSubmittersForDropdown();
        $environmentsForRadio = Environment::getEnvironmentsForRadio();
        $statesForDropdown = State::getStatesForDropdown();
        $prioritiesForDropdown = Priority::getPrioritiesForDropdown();
        $componentsForDropdown = Component::getComponentsForDropdown();
        $causesForDropdown = Cause::getCausesForDropdown();

        $notesForHistory = Note::getNotesForHistory($id);
        $tagsForCheckboxes = Tag::getTagsForCheckboxes();

        # Create an array of the tag long_names associated with the defect;
        # The view will need to check the appropriate form elements
        $tagsForThisDefect = [];
        foreach($defect->tags as $tag) {
            $tagsForThisDefect[] = $tag->long_name;
        }

        # get the url path
        $url = $request->path();

        # determine if view mode to disable form elements within the view.
        if (strpos($url, 'view') == true) {
            $view = 'true';
        } else {
            $view = '';
        }

        return view('/defects/edit')->with([
            'assignmentsForDropdown' => $assignmentsForDropdown,
            'submittersForDropdown' => $submittersForDropdown,
            'environmentsForRadio' => $environmentsForRadio,
            'statesForDropdown' => $statesForDropdown,
            'prioritiesForDropdown' => $prioritiesForDropdown,
            'componentsForDropdown' => $componentsForDropdown,
            'causesForDropdown' => $causesForDropdown,
            'tagsForCheckboxes' => $tagsForCheckboxes,
            'tagsForThisDefect' => $tagsForThisDefect,
            'defect' => $defect,
            'notesForHistory' => $notesForHistory,
            'view'=> $view,
        ]);

    }

    /**
    * POST
    * /defects/edit
    */

    public function updateDefect(Request $request) {

        # Validate the form data.
        $this->validate($request, [
            'id' => 'required|integer',
            'title' => 'required|min:10',
            'description' => 'required|min:10',
            'assignment_id' => 'required|integer',
            'found_in_version' => 'required|max:12',
            'submitter_id' => 'required|integer',
            'environment_id' => 'required|integer',
            'state_id' => 'required|integer',
            'priority_id' => 'required|integer',
            'component_id' => 'required|integer',
            'cause_id' => 'required|integer',
            'note' => 'required|min:10',
        ]);

        # Find the defect id to edit
        $defect = Defect::find($request->id);

        # Update the defect
        $defect->title = $request->title;
        $defect->description = $request->description;
        $defect->assignment_id = $request->assignment_id;
        $defect->found_in_version = $request->found_in_version;
        $defect->submitter_id = $request->submitter_id;
        $defect->environment_id = $request->environment_id;
        $defect->state_id = $request->state_id;
        $defect->priority_id = $request->priority_id;
        $defect->component_id = $request->component_id;
        $defect->cause_id = $request->cause_id;

        $defect->save();

        # Insert the new note
        $note = new Note;
        $note->post = $request->note."  [recorded: ".$defect->updated_at."]";
        $note->defect_id = $request->id;

        $note->save();

        #update the defect tab pivot table
        $tags = ($request->tags) ?: [];
        # Sync tags
        $defect->tags()->sync($tags);
        $defect->save();

        # Provide a confirmation message to the user.
        session::flash('message','Record Saved.');

        # Redirect the user to the backlog.
        return redirect('/defects/edit/'.$request->id);

    }

    /**
    * GET
    * /defects/metric
    */
    public function showMetric() {

        return view('defects.metric');

    }

    /**
    * GET
    * /defects/json_by_priority
    */
    public function getJsonByPriority() {

        #Run a raw SQL query to get the data for defects by priority pie chart
        $slices = DB::select('select priority_id, count(id) as total
            from defects where active = 1 group by priority_id');

        #Return the json view with the data for each slice of the pie
        return view('/defects.json_by_priority')->with([
            'slices' => $slices,
        ]);

    }

    /**
    * GET
    * /defects/json_by_priority
    */
    public function getJsonByState() {

        #Run a raw SQL query to get the data for defects by priority pie chart
        $slices = DB::select('select states.long_name as state,
            count(defects.id) as total
            from defects
            inner join states ON defects.state_id = states.id
            where defects.active = 1
            group by states.long_name');

        #Return the json view with the data for each slice of the pie
        return view('/defects.json_by_state')->with([
            'slices' => $slices,
        ]);

    }

    /**
    * GET
    * /defects/json_by_priority
    */
    public function getJsonBySubmitter() {

        #Run a raw SQL query to get the data for defects by priority pie chart
        $slices = DB::select('select submitters.last_name as name,
            count(defects.id) as total
            from defects
            inner join submitters ON defects.submitter_id = submitters.id
            where defects.active = 1
            group by submitters.last_name');

        #Return the json view with the data for each slice of the pie
        return view('/defects.json_by_submitter')->with([
            'slices' => $slices,
        ]);

    }

}
