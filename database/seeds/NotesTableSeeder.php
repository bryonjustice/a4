<?php

use Illuminate\Database\Seeder;

use App\Note; # <------ Add the Note Model

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Defect created.',
            'active' => 1,
            'defect_id' => 1,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Defect created.',
            'active' => 1,
            'defect_id' => 2,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Defect created.',
            'active' => 1,
            'defect_id' => 3,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Defect created.',
            'active' => 1,
            'defect_id' => 4,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Permissions Issue. Error 500/Internal Server Error.',
            'active' => 1,
            'defect_id' => 1,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'run on doc root: chmod -R g-w /path/to/document/root',
            'active' => 1,
            'defect_id' => 2,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Using any git command, user told git is not installed.',
            'active' => 1,
            'defect_id' => 3,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Close and re-open Terminal window after installing Git.',
            'active' => 1,
            'defect_id' => 4,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Edit the ~/.bashrc file using nano.',
            'active' => 1,
            'defect_id' => 1,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Branch is ahead of origin master by 100 commits.',
            'active' => 1,
            'defect_id' => 2,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Nothing to commit (working directory clean).',
            'active' => 1,
            'defect_id' => 3,
        ]);

        Note::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'post' => 'Issue can be cleared by running $ git fetch origin.',
            'active' => 1,
            'defect_id' => 4,
        ]);

    }
}
