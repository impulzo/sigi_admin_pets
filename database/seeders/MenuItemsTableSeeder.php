<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Tablero',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-02 19:16:09',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Multimedia',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-09 21:49:25',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Usuarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-02 19:16:09',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-02 19:16:09',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Herramientas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-09 21:49:25',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Diseñador de Menús',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-09 21:49:25',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Base de Datos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-09 21:49:25',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compás',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-09 21:49:25',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-09 21:49:25',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Ajustes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2023-04-02 19:16:09',
                'updated_at' => '2023-04-09 21:50:59',
                'route' => 'voyager.settings.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Datos de transferencia',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-credit-card',
                'color' => NULL,
                'parent_id' => 21,
                'order' => 2,
                'created_at' => '2023-04-02 19:26:05',
                'updated_at' => '2023-04-09 21:53:30',
                'route' => 'voyager.transfer-data.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Módulos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2023-04-02 19:53:08',
                'updated_at' => '2023-04-09 21:53:44',
                'route' => 'voyager.modules.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Métodos de pagos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-credit-cards',
                'color' => NULL,
                'parent_id' => 20,
                'order' => 3,
                'created_at' => '2023-04-02 19:58:31',
                'updated_at' => '2023-04-09 21:50:34',
                'route' => 'voyager.payment-methods.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Categorías',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => 20,
                'order' => 1,
                'created_at' => '2023-04-09 21:15:08',
                'updated_at' => '2023-04-09 21:50:28',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Sucursales',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => NULL,
                'parent_id' => 21,
                'order' => 1,
                'created_at' => '2023-04-09 21:18:07',
                'updated_at' => '2023-04-09 21:53:30',
                'route' => 'voyager.offices.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Unidades de medida',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => NULL,
                'parent_id' => 20,
                'order' => 2,
                'created_at' => '2023-04-09 21:19:51',
                'updated_at' => '2023-04-09 21:50:32',
                'route' => 'voyager.units.index',
                'parameters' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Productos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 21,
                'order' => 3,
                'created_at' => '2023-04-09 21:27:15',
                'updated_at' => '2023-04-09 21:53:33',
                'route' => 'voyager.products.index',
                'parameters' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Tipos de movimientos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-external',
                'color' => NULL,
                'parent_id' => 20,
                'order' => 4,
                'created_at' => '2023-04-09 21:31:57',
                'updated_at' => '2023-04-09 21:50:39',
                'route' => 'voyager.movement-types.index',
                'parameters' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Inventario de productos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 21,
                'order' => 4,
                'created_at' => '2023-04-09 21:40:15',
                'updated_at' => '2023-04-09 21:53:36',
                'route' => 'voyager.inventories.index',
                'parameters' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Catálogos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-folder',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2023-04-09 21:49:05',
                'updated_at' => '2023-04-09 21:53:44',
                'route' => NULL,
                'parameters' => '',
            ),
            20 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Configuración',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-company',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2023-04-09 21:53:13',
                'updated_at' => '2023-04-09 21:53:25',
                'route' => NULL,
                'parameters' => '',
            ),
            21 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Clientes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2023-04-12 23:37:46',
                'updated_at' => '2023-04-13 21:22:32',
                'route' => 'voyager.customers.index',
                'parameters' => 'null',
            ),
            22 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Templates de whatsapp',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
                'route' => 'voyager.whatsapp-templates.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}