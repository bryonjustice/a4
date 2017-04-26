<?php

use Illuminate\Database\Seeder;

use App\Assignment; # <------ Add the Assignment Model

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Assignment::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'short_name' => 'a1',
            'long_name' => 'A1: System Setup',
            'active' => 1,
        ]);

        Assignment::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'short_name' => 'a2',
            'long_name' => 'A2: PHP',
            'active' => 1,
        ]);

        Assignment::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'short_name' => 'a3',
            'long_name' => 'A3: Framework (Laravel)',
            'active' => 1,
        ]);

        Assignment::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'short_name' => 'a4',
            'long_name' => 'A4: Framework + Database',
            'active' => 1,
        ]);

    }
}
