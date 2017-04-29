<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    public static function getStatesForDropdown() {

        $states = State::all();

        # Organize the states into an array where the key = state id
        # and value = state long_name

        $statesForDropdown = [];

        foreach($states as $state) {
            $statesForDropdown[$state->id] = $state->long_name;
        }

        return $statesForDropdown;

    }

}
