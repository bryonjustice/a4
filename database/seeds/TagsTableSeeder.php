<?php

use Illuminate\Database\Seeder;

use App\Tag; # <------ Add the Tag Model

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 1',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 2',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 3',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 4',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 5',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 6',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 7',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 8',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 9',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 10',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 11',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 12',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Week 13',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'A1',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'A2',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'A3',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'A4',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'System Setup',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'PHP',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Laravel',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'MySQL',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Code',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Documentation',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Presentation',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Version Control',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Assignment Specific',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Outside Resource',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Faculty',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Student',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Peer',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Troubleshooting',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Class Work',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Personal Project',
            'active' => 1,
        ]);

    }
}
