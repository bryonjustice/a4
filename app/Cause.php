<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{

    /**
    * Relationship method
    */
    public function defects() {
        # Cause has many Defects
        # Define a one-to-many relationship.
        return $this->hasMany('App\Defect');
    }

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
