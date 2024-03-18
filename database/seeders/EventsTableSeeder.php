<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event();
        if ($event->count() == 0) {
            $event->create([
                'title'     => 'Début des cours',
                'author_id' => 0,
                'seo_title' => null,
                'excerpt'   => 'Vers la reprise des cours.',
                'body'      => '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>
<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>
<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>',
                'image'            => 'events/ev2.jpg',
                'date'             => '2022-01-10 08:00:00',
                'address'          => 'UHL',
                'slug'             => 'debut-des-cours',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $event->create([
                'title'     => 'Début des examens',
                'author_id' => 0,
                'seo_title' => null,
                'excerpt'   => 'L’administration de l’Université Henri Lopes a annoncé ce début de semaine, le début des examens',
                'body'      => '<p>Les modalités pratiques et les différentes dates du déroulement des épreuves seront, sans doute, déterminées en conseil d’établissement qui se tient ce vendredi.</p>',
                'image'            => 'events/ev1.jpg',
                'date'             => '2022-03-21 08:00:00',
                'address'           => 'UHL',
                'slug'             => 'debut-des-examens',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $event->create([
                'title'     => 'Marche sportive',
                'author_id' => 0,
                'seo_title' => null,
                'excerpt'   => 'Promouvoir la place du sport dans la vie estudiantine',
                'body'      => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam accusamus atque cum explicabo quidem nam dolore a aliquam ex dolores aliquid placeat ab voluptatum eaque, cumque id veritatis. Doloremque, quibusdam?</p>',
                'image'            => 'events/ev3.jpg',
                'slug'             => 'marche-sportive',
                'date'             => '2022-02-28 07:00:00',
                'address'          => 'UHL',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);
            

            $event->create([
                'title'     => 'Conférence académique',
                'author_id' => 1,
                'seo_title' => null,
                'excerpt'   => '',
                'body'      => '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>
<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>
<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>',
                'image'            => 'events/ev4.jpg',
                'slug'             => 'conference-academique',
                'date'             => '2022-06-10 10:00:00',
                'address'          => 'UHL',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);
        }
    }
}
