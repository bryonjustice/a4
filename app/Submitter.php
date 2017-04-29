<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submitter extends Model
{
  
    public static function getSubmittersForDropdown() {

        $submitters = Submitter::all();

        # Organize the submitters into an array where the key = submitter id
        # and value = submitterName (first_name + last_name)

        $submittersForDropdown = [];

        foreach($submitters as $submitter) {
            $submittersForDropdown[$submitter->id] =
                $submitter->first_name.' '.$submitter->last_name;
        }

        return $submittersForDropdown;

  }
}
