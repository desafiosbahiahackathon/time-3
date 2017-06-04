<?php

use Illuminate\Database\Seeder;
use App\Visit;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Visit::class, 500)->create();
    }
}
