<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Disable all mass assignment restrictions
        $this->call(CustomersTableSeeder::class);
        $this->call(PaiementStatesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CompagnyTypeTableSeeder::class);
        $this->call(ReferencesTableSeeder::class);
        // Re enable all mass assignment restrictions
    }
}
