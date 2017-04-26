<?php

use Illuminate\Database\Seeder;

use App\Priority; # <------ Add the Priority Model

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Priority::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'short_name' => 'P1',
            'long_name' => 'Critical',
            'active' => 1,
        ]);

        Priority::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'short_name' => 'P2',
            'long_name' => 'Important',
            'active' => 1,
        ]);

        Priority::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'short_name' => 'P3',
            'long_name' => 'Normal',
            'active' => 1,
        ]);

        Priority::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'short_name' => 'P4',
            'long_name' => 'Low',
            'active' => 1,
        ]);

    }
}
