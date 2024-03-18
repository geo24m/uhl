<?php

namespace Database\Seeders;

use App\Models\Cycle;
use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = new Level();
        if ($level->count() == 0) {
            $cycle1 = Cycle::where('name', 'Licence')->firstOrFail();
            $cycle2 = Cycle::where('name', 'Master')->firstOrFail();
            $cycle3 = Cycle::where('name', 'Doctorat')->firstOrFail();

            $level->create([
                'name' => 'Licence 1',
                'slug' => 'licence_1',
                'cycle_id' => $cycle1->id
            ]);

            $level->create([
                'name' => 'Licence 2',
                'slug' => 'licence_2',
                'cycle_id' => $cycle1->id
            ]);

            $level->create([
                'name' => 'Licence 3',
                'slug' => 'licence_3',
                'cycle_id' => $cycle1->id
            ]);

            $level->create([
                'name' => 'Master 1',
                'slug' => 'master_1',
                'cycle_id' => $cycle2->id
            ]);
    
            $level->create([
                'name' => 'Master 2',
                'slug' => 'master_2',
                'cycle_id' => $cycle2->id
            ]);
            
            $level->create([
                'name' => 'Doctorat',
                'slug' => 'doctorat',
                'cycle_id' => $cycle3->id
            ]);
        }
    }
}
