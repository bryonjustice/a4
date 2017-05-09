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
            'long_name' => 'v17.01.26',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.02.02',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.02.09',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.02.16',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.02.23',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.03.02',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.03.09',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.03.23',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.03.30',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.04.06',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.04.13',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.04.20',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.04.27',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.05.11',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.05.18',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.05.25',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'v17.06.01',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Team: Eleven',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Team: Hopper',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Team: Will Byers',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Team: Hawkins Lab',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Size: XS',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Size: S',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Size: M',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Size: L',
            'active' => 1,
        ]);

        Tag::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'long_name' => 'Size: XL',
            'active' => 1,
        ]);
    }
}
