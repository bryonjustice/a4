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

    public static function getTagsForCheckboxes() {

        $tags = Tag::orderBy('long_name','ASC')->get();

        # Organize the tags into an array where the key = tag id
        # and value = priority long_name

        $tagsForCheckboxes = [];

        foreach($tags as $tag) {
            $tagsForCheckboxes[$tag['id']] = $tag->long_name;
        }

        return $tagsForCheckboxes;

    }
}
