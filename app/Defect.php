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

    /**
    * Relationship Method
    */
    public function assignment() {
        # Defect belongs to Assignment
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Assignment');
    }

    /**
    * Relationship Method
    */
    public function cause() {
        # Defect belongs to Cause
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Cause');
    }

    /**
    * Relationship Method
    */
    public function component() {
        # Defect belongs to Component
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Component');
    }

    /**
    * Relationship Method
    */
    public function environment() {
        # Defect belongs to Environment
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Environment');
    }

    /**
    * Relationship Method
    */
    public function submitter() {
        # Defect belongs to Submitter
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Submitter');
    }

    /**
    * Relationship method
    */
    public function notes() {
        # Defect has many Notes
        # Define a one-to-many relationship.
        return $this->hasMany('App\Note');
    }    

}
