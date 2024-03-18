<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            // PagesTableSeeder::class,

            UsersTableSeeder::class,
            PostsTableSeeder::class,
            CategoriesTableSeeder::class,
            CycleTableSeeder::class,
            EventsTableSeeder::class,
            FormationsTableSeeder::class,
            LevelTableSeeder::class,

        ]);
    }
}
