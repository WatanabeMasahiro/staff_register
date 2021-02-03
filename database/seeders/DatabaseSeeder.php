<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        //$this->call(ContactsTableSeeder::class);
         $this->call(MattersTableSeeder::class);
        //$this->call(PayslipsTableSeeder::class);
        // $this->call(StaffTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
