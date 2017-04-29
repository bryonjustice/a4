<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{

    public static function getAssignmentsForDropdown() {

        $assignments = Assignment::all();

        # Organize the assignments into an array where the key = assignment id
        # and value = assignment long_name

        $assignmentsForDropdown = [];

        foreach($assignments as $assignment) {
            $assignmentsForDropdown[$assignment->id] = $assignment->long_name;
        }

        return $assignmentsForDropdown;

    }
}
