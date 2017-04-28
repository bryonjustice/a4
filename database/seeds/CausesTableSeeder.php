<?php

use Illuminate\Database\Seeder;

use App\Cause; # <------ Add the Cause Model

class CausesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Cause::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'long_name' => 'Unknown',
          'active' => 1,
      ]);

        Cause::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Code',
            'active' => 1,
        ]);

        Cause::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Configuration',
            'active' => 1,
        ]);

        Cause::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Database',
            'active' => 1,
        ]);

        Cause::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Deployment',
            'active' => 1,
        ]);

        Cause::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Missed Requirement',
            'active' => 1,
        ]);

        Cause::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Third Party Software',
            'active' => 1,
        ]);

        Cause::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Works as Expected',
            'active' => 1,
        ]);

    }
}
