<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Assignment; # <------ Add the Assignment Model
use App\Submitter; # <------ Add the Submitter Model
use App\Environment; # <------ Add the Environment Model
use App\State; # <------ Add the State Model
use App\Priority; # <------ Add the Priority Model
use App\Component; # <------ Add the Component Model
use App\Cause; # <------ Add the Cause Model
use App\Note; # <------ Add the Note Model
use Session;
use App\Defect; # <------ Add the Defect Model

class DefectController extends Controller
{

    /**
    * GET
    * /
    */
    public function index() {

        #Eager load the priority and state with the books
        $defects = Defect::where('active', '=', 1)
            ->with('state')->get();

        return view('defects.index')->with(['defects' => $defects]);

    }

    /**
    * GET
    * /books/new
    */
    public function enterNewDefect(Request $request) {

        $assignmentsForDropdown = Assignment::getAssignmentsForDropdown();
        $submittersForDropdown = Submitter::getSubmittersForDropdown();
        $environmentsForRadio = Environment::getEnvironmentsForRadio();
        $statesForDropdown = State::getStatesForDropdown();
        $prioritiesForDropdown = Priority::getPrioritiesForDropdown();
        $componentsForDropdown = Component::getComponentsForDropdown();
        $causesForDropdown = Cause::getCausesForDropdown();


        return view('/defects/new')->with([
            'assignmentsForDropdown' => $assignmentsForDropdown,
            'submittersForDropdown' => $submittersForDropdown,
            'environmentsForRadio' => $environmentsForRadio,
            'statesForDropdown' => $statesForDropdown,
            'prioritiesForDropdown' => $prioritiesForDropdown,
            'componentsForDropdown' => $componentsForDropdown,
            'causesForDropdown' => $causesForDropdown,
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

        $note = new Note;
        $note->post = "Defect Created [recorded: ".$result->created_at."].  "
            .$request->note."  [recorded: ".$result->created_at."]";
        $note->defect_id = $result->id;

        $note->save();

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

        $note = new Note;
        $note->post = $request->note."  [recorded: ".$defect->updated_at."]";
        $note->defect_id = $request->id;

        $note->save();

        # Provide a confirmation message to the user.
        session::flash('message','Record Saved.');

        # Redirect the user to the backlog.
        return redirect('/defects/edit/'.$request->id);

    }

}
