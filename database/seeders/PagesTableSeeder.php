<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Permission;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'pages');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pages',
                'display_name_singular' => __('voyager::seeders.data_types.page.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.page.plural'),
                'icon'                  => 'voyager-file-text',
                'model_name'            => 'TCG\\Voyager\\Models\\Page',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        //Data Rows
        $pageDataType = DataType::where('slug', 'pages')->firstOrFail();
        $dataRow = $this->dataRow($pageDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'author_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.author'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.title'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'excerpt');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => __('voyager::seeders.data_rows.excerpt'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => __('voyager::seeders.data_rows.body'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.slug'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'slugify' => [
                        'origin' => 'title',
                    ],
                    'validation' => [
                        'rule'  => 'unique:pages,slug',
                    ],
                ],
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.meta_description'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_keywords');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.meta_keywords'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.status'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'default' => 'INACTIVE',
                    'options' => [
                        'INACTIVE' => 'INACTIVE',
                        'ACTIVE'   => 'ACTIVE',
                    ],
                ],
                'order' => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 11,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => __('voyager::seeders.data_rows.page_image'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 12,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.pages'),
            'url'     => '',
            'route'   => 'voyager.pages.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-file-text',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 7,
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'accueil',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Accueil',
                'excerpt'   => "Créé en 2002 l'Université Henri Lopes est un établissement privé d'enseignement supérieur agrée par l'État.",
                'body'      => '',
                'image'            => 'pages/page1.jpg',
                'meta_description' => 'Yar Meta Description',
                'meta_keywords'    => 'Enseignement supérieu, Université Henri Lopes, Éducation, Formation académique, Développement personnel, Excellence académique, Croissance économique',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'notre-universite',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Notre université',
                'excerpt'   => "Créé en 2002 l'Université Henri Lopes est un établissement privé d'enseignement supérieur agrée par l'État.",
                'body'      => "Face aux défis persistants de l'enseignement supérieur, le partenariat entre le secteur privé et public est devenu impératif pour améliorer les performances. Dans cette optique, le Dr Jean Didier ELONGO a pris l'initiative de contribuer au développement de l'éducation supérieure, reconnue comme un levier essentiel de croissance nationale et de lutte contre la pauvreté. Ainsi, l'établissement de l'université Henri Lopes est le fruit de cet engagement, unissant les forces de l'innovation et de l'excellence pour façonner un avenir prometteur.",
                'image'            => 'pages/page2.jpg',
                'meta_description' => "Plongez dans l'excellence académique de l'université Henri Lopes, où l'innovation, la recherche de pointe et l'engagement social sont au cœur de notre mission éducative. Découvrez nos programmes de formation, notre environnement d'apprentissage dynamique et nos opportunités de développement personnel, propulsant nos étudiants vers un avenir prometteur. Rejoignez-nous pour faire partie d'une communauté universitaire passionnée, dédiée à l'épanouissement intellectuel et professionnel.",
                'meta_keywords'    => 'Enseignement supérieur, Keyword2',
                'status'           => 'ACTIVE',
            ])->save();
        }
        
        $page = Page::firstOrNew([
            'slug' => 'formation',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Formation',
                'excerpt'   => "Nous facilitons l’insertion des étudiants vers le monde de l'emploi en leur offrant une gamme des options ou filières du monde moderne.",
                'body'      => '',
                'image'            => 'pages/page3.jpg',
                'meta_description' => "Nous facilitons l’insertion des étudiants vers le monde de l'emploi en leur offrant une gamme des options ou filières du monde moderne.",
                'meta_keywords'    => "Programme d'études, Recherche universitaire, Débouchés professionnels, Formation académique",
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'actualite',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Actualite',
                'excerpt'   => "Tous les actualités de l'Université Henri Lopes.",
                'body'      => '',
                'image'            => 'pages/page1.jpg',
                'meta_description' => 'Yar Meta Description',
                'meta_keywords'    => 'Communauté étudiante, Engagement social',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'admission',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Admission',
                'excerpt'   => "Découvrez comment rejoindre notre université Henri Lopes. Informations sur les critères d'admission, les étapes à suivre et les dates limites. Préparez-vous à débuter votre parcours académique avec nous.",
                'body'      => '',
                'image'            => 'pages/page1.jpg',
                'meta_description' => "Découvrez le processus d'admission à l'université Henri Lopes, où nous vous offrons une opportunité d'accéder à une éducation de qualité dans un environnement stimulant. Obtenez toutes les informations nécessaires sur les critères d'admission, les étapes à suivre et les dates limites pour rejoindre notre communauté universitaire dynamique. Préparez-vous à faire le premier pas vers un avenir brillant en démarrant votre parcours académique avec nous.",
                'meta_keywords'    => 'Éducation, Formation académique',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'equipe-dirigeante',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Equipe dirigeante',
                'excerpt'   => "Explorez la vision et l'engagement de notre équipe dirigeante, déterminée à inspirer l'excellence et à façonner un avenir prometteur pour notre université et ses étudiants.",
                'body'      => '',
                'image'            => 'pages/page2.jpg',
                'meta_description' => "Découvrez l'équipe dirigeante dévouée de l'université Henri Lopes, des leaders visionnaires engagés à guider notre institution vers l'excellence académique. Rencontrez nos dirigeants, découvrez leurs parcours inspirants et leur passion pour l'innovation éducative. Ensemble, nous façonnons l'avenir de l'éducation et inspirons nos étudiants à atteindre de nouveaux sommets.",
                'meta_keywords'    => "Équipe dirigeante, Dirigeants, Président de l'université, Vice-président, Doyens, Administration universitaire, Université Henri Lopes",
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'contact',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Nous contacter',
                'excerpt'   => "Besoin d'aide ou de renseignements ? Contactez-nous ! Notre équipe est là pour vous assister dans votre parcours vers l'université Henri Lopes.",
                'body'      => '',
                'image'            => 'pages/page2.jpg',
                'meta_description' => "Besoin d'aide ou de renseignements ? Contactez-nous ! Notre équipe est là pour vous assister dans votre parcours vers l'université Henri Lopes.",
                'meta_keywords'    => "Contact, Université Henri Lopes, Assistance étudiante, Heures d'ouverture, Demande d'admission, Formulaire de contact, Demande de renseignements",
                'status'           => 'ACTIVE',
            ])->save();
        }

//         $page = Page::firstOrNew([
//             'slug' => 'equipe-dirigeante',
//         ]);
//         if (!$page->exists) {
//             $page->fill([
//                 'author_id' => 0,
//                 'title'     => 'Equipe dirigeante',
//                 'excerpt'   => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
//                 'body'      => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
// <p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
//                 'image'            => 'pages/page1.jpg',
//                 'meta_description' => 'Yar Meta Description',
//                 'meta_keywords'    => 'Keyword1, Keyword2',
//                 'status'           => 'ACTIVE',
//             ])->save();
//         }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
