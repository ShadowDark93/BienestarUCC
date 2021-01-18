<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::create([
            'tipoPersona'=>'Admin',
            'tipoDocumento'=>'CC',
            'numero'=>'1194706314',
            'name' => 'David Ortega',
            'email' => 'davidortegacadena@gmail.com',
            'password' => bcrypt('David312483'),
        ]);

        User::factory(9)->create();
        $this->call(RetoSeeder::class);

    }
}
