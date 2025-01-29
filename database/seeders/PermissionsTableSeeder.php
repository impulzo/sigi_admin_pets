<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => 'system',
                'display_name' => 'sistema',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'display_name' => 'menús',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'display_name' => 'roles',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'display_name' => 'usuarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'display_name' => 'ajustes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_transfer_data',
                'table_name' => 'transfer_data',
                'display_name' => 'transferencia de datos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_modules',
                'table_name' => 'modules',
                'display_name' => 'módulos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_payment_methods',
                'table_name' => 'payment_methods',
                'display_name' => 'métodos de pago',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'display_name' => 'categorías',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_offices',
                'table_name' => 'offices',
                'display_name' => 'oficinas',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_units',
                'table_name' => 'units',
                'display_name' => 'unidades',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_products',
                'table_name' => 'products',
                'display_name' => 'productos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_movement_types',
                'table_name' => 'movement_types',
                'display_name' => 'tipos de movimientos',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_inventories',
                'table_name' => 'inventories',
                'display_name' => 'inventarios',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'read_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'edit_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'add_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'delete_customers',
                'table_name' => 'customers',
                'display_name' => 'clientes',
                'created_at' => '2023-05-18 10:57:58',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'browse_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'read_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'edit_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'add_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'delete_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'display_name' => 'plantillas de whatsapp',
                'created_at' => '2023-05-18 11:01:23',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'browse_pets',
                'table_name' => 'pets',
                'display_name' => 'mascotas',
                'created_at' => '2024-11-04 21:09:10',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'read_pets',
                'table_name' => 'pets',
                'display_name' => 'mascotas',
                'created_at' => '2024-11-04 21:09:10',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            82 => 
            array (
                'id' => 83,
                'key' => 'edit_pets',
                'table_name' => 'pets',
                'display_name' => 'mascotas',
                'created_at' => '2024-11-04 21:09:10',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            83 => 
            array (
                'id' => 84,
                'key' => 'add_pets',
                'table_name' => 'pets',
                'display_name' => 'mascotas',
                'created_at' => '2024-11-04 21:09:10',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            84 => 
            array (
                'id' => 85,
                'key' => 'delete_pets',
                'table_name' => 'pets',
                'display_name' => 'mascotas',
                'created_at' => '2024-11-04 21:09:10',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            85 => 
            array (
                'id' => 86,
                'key' => 'browse_services',
                'table_name' => 'services',
                'display_name' => 'servicios',
                'created_at' => '2024-11-04 21:15:49',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            86 => 
            array (
                'id' => 87,
                'key' => 'read_services',
                'table_name' => 'services',
                'display_name' => 'servicios',
                'created_at' => '2024-11-04 21:15:49',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            87 => 
            array (
                'id' => 88,
                'key' => 'edit_services',
                'table_name' => 'services',
                'display_name' => 'servicios',
                'created_at' => '2024-11-04 21:15:49',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            88 => 
            array (
                'id' => 89,
                'key' => 'add_services',
                'table_name' => 'services',
                'display_name' => 'servicios',
                'created_at' => '2024-11-04 21:15:49',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            89 => 
            array (
                'id' => 90,
                'key' => 'delete_services',
                'table_name' => 'services',
                'display_name' => 'servicios',
                'created_at' => '2024-11-04 21:15:49',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            90 => 
            array (
                'id' => 91,
                'key' => 'browse_expenses',
                'table_name' => 'expenses',
                'display_name' => 'gastos',
                'created_at' => '2024-11-06 17:49:22',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            91 => 
            array (
                'id' => 92,
                'key' => 'read_expenses',
                'table_name' => 'expenses',
                'display_name' => 'gastos',
                'created_at' => '2024-11-06 17:49:22',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            92 => 
            array (
                'id' => 93,
                'key' => 'edit_expenses',
                'table_name' => 'expenses',
                'display_name' => 'gastos',
                'created_at' => '2024-11-06 17:49:22',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            93 => 
            array (
                'id' => 94,
                'key' => 'add_expenses',
                'table_name' => 'expenses',
                'display_name' => 'gastos',
                'created_at' => '2024-11-06 17:49:22',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            94 => 
            array (
                'id' => 95,
                'key' => 'delete_expenses',
                'table_name' => 'expenses',
                'display_name' => 'gastos',
                'created_at' => '2024-11-06 17:49:22',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            95 => 
            array (
                'id' => 96,
                'key' => 'browse_dates',
                'table_name' => 'dates',
                'display_name' => 'citas',
                'created_at' => '2024-11-06 17:55:08',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            96 => 
            array (
                'id' => 97,
                'key' => 'read_dates',
                'table_name' => 'dates',
                'display_name' => 'citas',
                'created_at' => '2024-11-06 17:55:08',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            97 => 
            array (
                'id' => 98,
                'key' => 'edit_dates',
                'table_name' => 'dates',
                'display_name' => 'citas',
                'created_at' => '2024-11-06 17:55:08',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            98 => 
            array (
                'id' => 99,
                'key' => 'add_dates',
                'table_name' => 'dates',
                'display_name' => 'citas',
                'created_at' => '2024-11-06 17:55:08',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            99 => 
            array (
                'id' => 100,
                'key' => 'delete_dates',
                'table_name' => 'dates',
                'display_name' => 'citas',
                'created_at' => '2024-11-06 17:55:08',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            100 => 
            array (
                'id' => 101,
                'key' => 'browse_cash_audits',
                'table_name' => 'cash_audits',
                'display_name' => 'cortes de caja',
                'created_at' => '2024-11-06 18:00:20',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            101 => 
            array (
                'id' => 102,
                'key' => 'read_cash_audits',
                'table_name' => 'cash_audits',
                'display_name' => 'cortes de caja',
                'created_at' => '2024-11-06 18:00:20',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            102 => 
            array (
                'id' => 103,
                'key' => 'edit_cash_audits',
                'table_name' => 'cash_audits',
                'display_name' => 'cortes de caja',
                'created_at' => '2024-11-06 18:00:20',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            103 => 
            array (
                'id' => 104,
                'key' => 'add_cash_audits',
                'table_name' => 'cash_audits',
                'display_name' => 'cortes de caja',
                'created_at' => '2024-11-06 18:00:20',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            104 => 
            array (
                'id' => 105,
                'key' => 'delete_cash_audits',
                'table_name' => 'cash_audits',
                'display_name' => 'cortes de caja',
                'created_at' => '2024-11-06 18:00:20',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            105 => 
            array (
                'id' => 106,
                'key' => 'browse_receipts',
                'table_name' => 'receipts',
                'display_name' => 'recibos',
                'created_at' => '2024-11-06 18:07:09',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            106 => 
            array (
                'id' => 107,
                'key' => 'read_receipts',
                'table_name' => 'receipts',
                'display_name' => 'recibos',
                'created_at' => '2024-11-06 18:07:09',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            107 => 
            array (
                'id' => 108,
                'key' => 'edit_receipts',
                'table_name' => 'receipts',
                'display_name' => 'recibos',
                'created_at' => '2024-11-06 18:07:09',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            108 => 
            array (
                'id' => 109,
                'key' => 'add_receipts',
                'table_name' => 'receipts',
                'display_name' => 'recibos',
                'created_at' => '2024-11-06 18:07:09',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            109 => 
            array (
                'id' => 110,
                'key' => 'delete_receipts',
                'table_name' => 'receipts',
                'display_name' => 'recibos',
                'created_at' => '2024-11-06 18:07:09',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            110 => 
            array (
                'id' => 111,
                'key' => 'browse_calendars',
                'table_name' => 'calendars',
                'display_name' => 'calendarios',
                'created_at' => '2024-11-06 18:18:07',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            111 => 
            array (
                'id' => 112,
                'key' => 'read_calendars',
                'table_name' => 'calendars',
                'display_name' => 'calendarios',
                'created_at' => '2024-11-06 18:18:07',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            112 => 
            array (
                'id' => 113,
                'key' => 'edit_calendars',
                'table_name' => 'calendars',
                'display_name' => 'calendarios',
                'created_at' => '2024-11-06 18:18:07',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            113 => 
            array (
                'id' => 114,
                'key' => 'add_calendars',
                'table_name' => 'calendars',
                'display_name' => 'calendarios',
                'created_at' => '2024-11-06 18:18:07',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            114 => 
            array (
                'id' => 115,
                'key' => 'delete_calendars',
                'table_name' => 'calendars',
                'display_name' => 'calendarios',
                'created_at' => '2024-11-06 18:18:07',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            115 => 
            array (
                'id' => 116,
                'key' => 'browse_medical_histories',
                'table_name' => 'medical_histories',
                'display_name' => 'historial medico',
                'created_at' => '2024-11-06 18:29:14',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            116 => 
            array (
                'id' => 117,
                'key' => 'read_medical_histories',
                'table_name' => 'medical_histories',
                'display_name' => 'historial medico',
                'created_at' => '2024-11-06 18:29:14',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            117 => 
            array (
                'id' => 118,
                'key' => 'edit_medical_histories',
                'table_name' => 'medical_histories',
                'display_name' => 'historial medico',
                'created_at' => '2024-11-06 18:29:14',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            118 => 
            array (
                'id' => 119,
                'key' => 'add_medical_histories',
                'table_name' => 'medical_histories',
                'display_name' => 'historial medico',
                'created_at' => '2024-11-06 18:29:14',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            119 => 
            array (
                'id' => 120,
                'key' => 'delete_medical_histories',
                'table_name' => 'medical_histories',
                'display_name' => 'historial medico',
                'created_at' => '2024-11-06 18:29:14',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            120 => 
            array (
                'id' => 121,
                'key' => 'browse_vaccines',
                'table_name' => 'vaccines',
                'display_name' => 'vacunas',
                'created_at' => '2024-11-06 18:39:44',
                'updated_at' => '2024-11-06 18:39:44',
            ),
            121 => 
            array (
                'id' => 122,
                'key' => 'read_vaccines',
                'table_name' => 'vaccines',
                'display_name' => 'vacunas',
                'created_at' => '2024-11-06 18:39:44',
                'updated_at' => '2024-11-06 18:39:44',
            ),
            122 => 
            array (
                'id' => 123,
                'key' => 'edit_vaccines',
                'table_name' => 'vaccines',
                'display_name' => 'vacunas',
                'created_at' => '2024-11-06 18:39:44',
                'updated_at' => '2024-11-06 18:39:44',
            ),
            123 => 
            array (
                'id' => 124,
                'key' => 'add_vaccines',
                'table_name' => 'vaccines',
                'display_name' => 'vacunas',
                'created_at' => '2024-11-06 18:39:44',
                'updated_at' => '2024-11-06 18:39:44',
            ),
            124 => 
            array (
                'id' => 125,
                'key' => 'delete_vaccines',
                'table_name' => 'vaccines',
                'display_name' => 'vacunas',
                'created_at' => '2024-11-06 18:39:44',
                'updated_at' => '2024-11-06 18:39:44',
            ),
        ));
        
        
    }
}