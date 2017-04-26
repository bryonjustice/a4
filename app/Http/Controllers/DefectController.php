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
    */
    public function new() {
        $assignments = Assignment::all();
        $submitters = Submitter::all();
        $environments = Environment::all();
        $states = State::all();
        $priorities = Priority::all();
        $components = Component::all();
        $causes = Cause::all();

        return view('/defects/backlog')
            ->with('assignments', $assignments)
            ->with('submitters', $submitters)
            ->with('environments', $environments)
            ->with('states', $states)
            ->with('priorities', $priorities)
            ->with('components', $components)
            ->with('causes', $causes);
    }
}
