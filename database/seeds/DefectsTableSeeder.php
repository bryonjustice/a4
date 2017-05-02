<?php

use Illuminate\Database\Seeder;

use App\Defect; # <------ Add the Defect Model

class DefectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Defect::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'SQLSTATE[28000] [1045] Access denied for user',
            'description' => 'Tried to run  migrations but they failed.',
            'found_in_version' => '17.05.11.00',
            'assignment_id' => 1,
            'cause_id' => 1,
            'component_id' => 1,
            'environment_id' => 1,
            'priority_id' => 2,
            'state_id' => 1,
            'submitter_id' => 1,
        ]);

        Defect::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Testing Migration failed',
            'description' => 'DefectsTableSeeder is missing the use statement',
            'found_in_version' => '17.05.11.00',
            'assignment_id' => 4,
            'cause_id' => 1,
            'component_id' => 1,
            'environment_id' => 1,
            'priority_id' => 2,
            'state_id' => 1,
            'submitter_id' => 1,
        ]);

        Defect::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Developer did not follow style guide',
            'description' => 'File indention is only two spaces',
            'found_in_version' => '17.05.11.00',
            'assignment_id' => 2,
            'cause_id' => 1,
            'component_id' => 1,
            'environment_id' => 2,
            'priority_id' => 1,
            'state_id' => 4,
            'submitter_id' => 4,
        ]);

        Defect::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Composer memory issue',
            'description' => 'cannot allocate memory',
            'found_in_version' => '17.05.11.00',
            'assignment_id' => 3,
            'cause_id' => 2,
            'component_id' => 6,
            'environment_id' => 2,
            'priority_id' => 3,
            'state_id' => 1,
            'submitter_id' => 2,
        ]);
    }
}
