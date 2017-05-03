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
            1 => [13,17,20],
            2 => [13,17,20],
            3 => [13,17,21],
            4 => [13,17,21]
        ];

        # Loop the the array and create a new pivot
        foreach($defects as $id => $tags) {
            # Get the defect
            $defect = Defect::where('id','=',$id)->first();

            # Loop through the tags for the books
            foreach($tags as $id) {
                $tag = Tag::where('id','=',$id)->first();

                # save the tag and book
                $defect->tags()->save($tag);
            }


        }

    }
}
