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
                'description' => "Le cycle licence est un programme universitaire de premier cycle offrant une formation spécialisée dans un domaine spécifique.",
            ]);
    
            $cycle->create([
                'name' => 'Master',
                'slug' => 'master',
                'description' => "Le cycle master est un programme d'études supérieures spécialisé d'une durée typique de un à deux ans."
            ]);
            
            $cycle->create([
                'name' => 'Doctorat',
                'slug' => 'doctorat',
                'description' => "Le cycle doctorat est le plus haut niveau d'études universitaires, axé sur la recherche avancée et la rédaction d'une thèse originale."
            ]);
        }
    }
}
