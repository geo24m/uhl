<?php

namespace Database\Seeders;

use App\Models\Formation;
use TCG\Voyager\Models\Menu;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data Type

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Formations',
            'url'     => '',
            'route'   => 'voyager.formations.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-news',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 6,
            ])->save();
        }

        //Permissions
        Permission::generateFor('formations');

        $formation = new Formation();
        if ($formation->count() == 0) {
            $formation->create([
                'name'     => 'Droit',
                'seo_title' => null,
                'excerpt'   => 'Devenez avocat(e), en droit public ou privé possible grâce au Droit',
                'body'      => '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>
<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>
<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>',
                'image'            => 'formations/droit.jpg',
                'slug'             => 'droit',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Logistique et Transport',
                'seo_title' => null,
                'excerpt'   => 'Logistique et Transport',
                'body'      => "<p>Le Gestion des magasins, de stocks ou l'acheminement des produits à votre main</p>",
                'image'            => 'formations/logistique.jpg',
                'slug'             => 'logistique-et-transport',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Réseaux & Télécommunications',
                'seo_title' => null,
                'excerpt'   => 'Réseaux & Télécommunications',
                'body'      => "<p>Vous esperez devenir Administrateur réseaux, Technicien superieur en réseau, ou agent de télécom vous êtez à la bonne porte.</p>",
                'image'            => 'formations/reseaux.jpg',
                'slug'             => 'reseaux-et-telecommunications',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);
            
            $formation->create([
                'name'     => 'Comptabilité et Gestion financière',
                'seo_title' => null,
                'excerpt'   => 'Comptabilité et Gestion financière',
                'body'      => "<p>Dans le cadre de la réforme du baccalauréat général, aucune spécialité n'est absolument nécessaire pour entreprendre des études de droit. En revanche, si votre projet d'orientation est suffisamment avancé au moment d'entrer en 1ere, vous pourrez utilement choisir parmi la liste suivante : Histoire géographie, géopolitique et sciences politiques ; Humanités, littérature et philosophie, Langues, littératures et cultures étrangères ; Littérature, langues et cultures de l'Antiquité ; Sciences économiques et sociales.</p>",
                'image'            => 'formations/compta.jpg',
                'slug'             => 'comptabilite-et-gestion-financiere',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Informatique de gestion',
                'seo_title' => null,
                'excerpt'   => 'Informatique de gestion',
                'body'      => "<p>Concevoir des applications web ou mobile, grace à la programmation et au developpement Informatique.Devenez, developpeur, ingénieur ou analyste en Informatique.</p>",
                'image'            => 'formations/informatique.jpg',
                'slug'             => 'informatique-de-gestion',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Gestion de Resource Humaine',
                'seo_title' => null,
                'excerpt'   => 'Gestion de Resource Humaine',
                'body'      => "<p>Acquerir des compétence dans la Gestion Administrative, du personnel.</p>",
                'image'            => 'formations/rh.jpg',
                'slug'             => 'gestion-resource-humaine',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Assistanat de Direction',
                'seo_title' => null,
                'excerpt'   => 'Assistanat de Direction',
                'body'      => "<p>La gestion et la coordination du personnel est à votre porté, votre rêve est à porter de main.</p>",
                'image'            => 'formations/secretariat.jpg',
                'slug'             => 'assistanat-de-direction',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Maintenance des Ordinateurs',
                'seo_title' => null,
                'excerpt'   => 'Maintenance des Ordinateurs',
                'body'      => "<p>L'Ordinateur n'a plus aucun secret pour vous, grâce à la maintenance des Ordinateurs Software et Hardware</p>",
                'image'            => 'formations/maintenance.jpg',
                'slug'             => 'maintenance-des-ordinateurs',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Qualité Hygiène & Sécurité et environnement',
                'seo_title' => null,
                'excerpt'   => 'Qualité Hygiène & Sécurité et environnement',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'qualite-hygiene-et-securite',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Banque Finance Monnaie & Assurance',
                'seo_title' => null,
                'excerpt'   => 'Banque Finance Monnaie & Assurance',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'banque-finance-monnaie-ssurance',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Banque Finance Monnaie',
                'seo_title' => null,
                'excerpt'   => 'Banque Finance Monnaie',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'banque-finance-monnaie',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Management des Ressources Humaines',
                'seo_title' => null,
                'excerpt'   => 'Management des Ressources Humaines',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'management-des-ressources-humaines',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Genie informatique',
                'seo_title' => null,
                'excerpt'   => 'Genie informatique',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'genie-informatique',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Comptabilité Gestion Financiere & Audit',
                'seo_title' => null,
                'excerpt'   => 'Comptabilité Gestion Financiere & Audit',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'comptabilité-gestion-financiere-audit',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Management des Unités Commerciales',
                'seo_title' => null,
                'excerpt'   => 'Management des Unités Commerciales',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'management-des-unités-commerciales',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Relations Internationnales & Diplomatie',
                'seo_title' => null,
                'excerpt'   => 'Relations Internationnales & Diplomatie',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'relations-internationnales-diplomatie',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Droit Privé et Droit Publlic',
                'seo_title' => null,
                'excerpt'   => 'Droit Privé et Droit Publlic',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'droit-prive-et-droit-publlic',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Assurance Banque & Finance',
                'seo_title' => null,
                'excerpt'   => 'Assurance Banque & Finance',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'assurance-banque-finance',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Marchés Financiers & Gestion des Risque',
                'seo_title' => null,
                'excerpt'   => 'Marchés Financiers & Gestion des Risque',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'marches-financiers-gestion-des-risque',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);

            $formation->create([
                'name'     => 'Ingénierie des risques Economiques & Financiers',
                'seo_title' => null,
                'excerpt'   => 'Ingénierie des risques Economiques & Financiers',
                'body'      => "<p>Apporter une nouvelle done dans l'entreprise en prenant en compte les condition de travail et la sécurité du personnel sur les sites.</p>",
                'image'            => 'formations/hygiene.jpg',
                'slug'             => 'ingenierie-des-risques-economiques-financiers',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLIER',
                'featured'         => 0,
            ]);
        }
    }
}
