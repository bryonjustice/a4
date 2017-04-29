<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{

    public static function getComponentsForDropdown() {

        $components = Component::all();

        # Organize the components into an array where the key = component id
        # and value = component long_name

        $causesForDropdown = [];

        foreach($components as $component) {
            $componentsForDropdown[$component->id] = $component->long_name;
        }

        return $componentsForDropdown;

  }

}
