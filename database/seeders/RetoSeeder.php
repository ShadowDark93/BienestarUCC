<?php

namespace Database\Seeders;

use App\Models\Reto;
use Illuminate\Database\Seeder;

class RetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reto::factory(8)->create();
    }
}
