<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{

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
