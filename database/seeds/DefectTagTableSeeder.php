<?php

use Illuminate\Database\Seeder;

use App\Defect;
use App\Tag;

class DefectTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        # An array of defects and the associated tags
        $defects =[
            1 => [14,18,22],
            2 => [14,19,23],
            3 => [14,20,24],
            4 => [14,21,25]
        ];

        # Loop the the array and create each pivot entry
        foreach($defects as $id => $tags) {
            # Get the defect
            $defect = Defect::where('id','=',$id)->first();

            # Loop through the tags for the defects
            foreach($tags as $id) {
                $tag = Tag::where('id','=',$id)->first();

                # save the tag and defect
                $defect->tags()->save($tag);
            }
        }
    }
}
