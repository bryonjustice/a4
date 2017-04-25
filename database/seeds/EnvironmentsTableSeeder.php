<?php

use Illuminate\Database\Seeder;

use App\Environment; # <------ Add the Environment Model

class EnvironmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Environment::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'short_name' => 'DEV',
          'long_name' => 'Local',
          'active' => 1,
      ]);

      Environment::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'short_name' => 'PROD',
          'long_name' => 'Production',
          'active' => 1,
      ]);
      
    }
}
