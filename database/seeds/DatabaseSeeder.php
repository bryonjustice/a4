<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AssignmentsTableSeeder::class);
        $this->call(SubmittersTableSeeder::class);
        $this->call(EnvironmentsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(PrioritiesTableSeeder::class);
        $this->call(ComponentsTableSeeder::class);
        $this->call(CausesTableSeeder::class);
        $this->call(NotesTableSeeder::class);

        $this->call(DefectsTableSeeder::class);

    }
}
