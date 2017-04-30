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
        $defects = Defect::with('state')->get();

        return view('defects.index')->with(['defects' => $defects]);

    }

    /**
    * GET
    * /
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
    * /
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

        # Provide a confirmation message to the user.
        session::flash('message','Record Added.');

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

        # Redirect the user to the backlog.
        return redirect('/');

    }
}
