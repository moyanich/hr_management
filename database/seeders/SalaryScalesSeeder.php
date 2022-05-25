<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalaryScalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SalaryScales::factory(12)->create();
    }
}
