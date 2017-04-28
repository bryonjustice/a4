<?php

use Illuminate\Database\Seeder;

use App\Component; # <------ Add the Component Model

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Unknown',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Client-side (HTML,CSS,JS)',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Controllers',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Database',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Forms',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Laravel',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Packages',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Performance',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Routes',
            'active' => 1,
        ]);

        Component::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Views / Blade',
            'active' => 1,
        ]);

    }
}
