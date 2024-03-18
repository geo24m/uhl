<?php

namespace Database\Seeders;

use App\Models\Cycle;
use Illuminate\Database\Seeder;

class CycleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cycle = new Cycle();
        if ($cycle->count() == 0) {
            $cycle->create([
                'name' => 'Licence',
                'slug' => 'licence',
            ]);
    
            $cycle->create([
                'name' => 'Master',
                'slug' => 'master',
            ]);
            
            $cycle->create([
                'name' => 'Doctorat',
                'slug' => 'doctorat',
            ]);
        }
    }
}
