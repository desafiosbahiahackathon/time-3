<?php

use Illuminate\Database\Seeder;
use App\Woman;

class WomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Woman::class, 100)->create();
    }
}
