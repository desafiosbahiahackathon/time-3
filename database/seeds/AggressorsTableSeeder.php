<?php

use Illuminate\Database\Seeder;
use App\Aggressor;

class AggressorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Aggressor::class, 100)->create();
    }
}
