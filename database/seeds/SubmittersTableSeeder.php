<?php

use Illuminate\Database\Seeder;

use App\Submitter; # <------ Add the Submitter Model

class SubmittersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Submitter::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Bryon',
          'last_name' => 'Justice',
          'email' => 'bryon_justice@yahoo.com',
          'active' => 1,
      ]);

      Submitter::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Jenni',
          'last_name' => 'Whitman',
          'email' => 'jenni@dwa15.com',
          'active' => 1,
      ]);

      Submitter::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Guest',
          'last_name' => 'Peer Review',
          'email' => '',
          'active' => 1,
      ]);

      Submitter::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Susan',
          'last_name' => 'Buck',
          'email' => 'susanbuck@fas.harvard.edu',
          'active' => 1,
      ]);
      
    }
}
