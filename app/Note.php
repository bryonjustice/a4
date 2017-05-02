<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public static function getNotesForHistory($id) {

        $notes = Note::where('defect_id', '=', $id)->get();

        # Organize the notes into an array where the key = note id
        # and value = post

        $notesForHistory = [];

        foreach($notes as $note) {
            $notesForHistory[$note->id] = $note->post;
        }

        return $notesForHistory;
    }
}
