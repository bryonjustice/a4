<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{

    /**
    * Relationship method
    */
    public function defects() {
        # Priority has many Defects
        # Define a one-to-many relationship.
        return $this->hasMany('App\Defect');
    }

    public static function getPrioritiesForDropdown() {

        $priorities = Priority::all();

        # Organize the priorities into an array where the key = priority id
        # and value = priority long_name

        $prioritiesForDropdown = [];

        foreach($priorities as $priority) {
            $prioritiesForDropdown[$priority->id] = $priority->long_name;
        }

        return $prioritiesForDropdown;

    }

}
