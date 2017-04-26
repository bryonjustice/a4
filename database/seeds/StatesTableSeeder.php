<?php

use Illuminate\Database\Seeder;

use App\State; # <------ Add the State Model

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        State::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Submitted',
            'image_url' => '/images/submitted.png',
            'active' => 1,
        ]);

        State::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Open',
            'image_url' => '/images/open.png',
            'active' => 1,
        ]);

        State::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Fixed',
            'image_url' => '/images/fixed.png',
            'active' => 1,
        ]);

        State::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Closed',
            'image_url' => '/images/closed.png',
            'active' => 1,
        ]);
      
    }
}
