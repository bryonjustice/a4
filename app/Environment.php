<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    public static function getEnvironmentsForRadio() {

        $environments = Environment::all();

        # Organize the environments into an array where the key = environment id
        # and value = environment long_name

        $environmentsForRadio = [];

        foreach($environments as $environment) {
            $environmentsForRadio[$environment->id] = $environment->long_name;
        }

        return $environmentsForRadio;

  }
}
