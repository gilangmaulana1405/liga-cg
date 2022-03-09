<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ligacg;

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

         Ligacg::create([
          
            'employee' => 'gilang maulana',
            'circle_group' => 'Circle Group A',
            'jenis_taging' => 'Taging Merah',
            'point' => '10'
          
        ]);
    }
}
