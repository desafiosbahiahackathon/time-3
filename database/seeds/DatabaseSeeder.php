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
        $this->call(WomenTableSeeder::class);
        $this->call(AggressorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VisitsTableSeeder::class);
    }
}
