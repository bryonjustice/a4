<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{

    /**
    * Relationship method
    */
    public function defects() {
        # Assignment has many Defects
        # Define a one-to-many relationship.
        return $this->hasMany('App\Defect');
    }

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
