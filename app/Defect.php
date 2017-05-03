<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defect extends Model
{
    /**
    * Relationship Method
    */
    public function state() {
        # Defect belongs to State
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\State');
    }

    /**
    * Relationship Method
    */
    public function priority() {
        # Defect belongs to Priority
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Priority');
    }

    /**
    * Relationship Method
    */
    public function tags() {

        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

}
