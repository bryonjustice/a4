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

class DefectController extends Controller
{

    /**
    * GET
    * /
    * /new
    */
    public function new() {

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
}
