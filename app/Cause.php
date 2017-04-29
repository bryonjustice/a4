<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{

    public static function getCausesForDropdown() {

        $causes = Cause::all();

        # Organize the causes into an array where the key = cause id
        # and value = cause long_name

        $causesForDropdown = [];

        foreach($causes as $cause) {
            $causesForDropdown[$cause->id] = $cause->long_name;
        }

        return $causesForDropdown;

    }

}
