<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
    * Relationship Method
    */
    public function defects() {
        return $this->belongsToMany('App\Defect')->withTimestamps();
    }
}
