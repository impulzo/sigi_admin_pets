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
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'sistema',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => 'system',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            1 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'sistema',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => 'system',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            2 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'sistema',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => 'system',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            3 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'sistema',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => 'system',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            4 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'sistema',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => 'system',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            5 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'menús',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            6 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'menús',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            7 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'menús',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            8 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'menús',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            9 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'menús',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            10 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'roles',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            11 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'roles',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            12 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'roles',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            13 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'roles',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            14 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'roles',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            15 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'usuarios',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            16 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'usuarios',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            17 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'usuarios',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            18 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'usuarios',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            19 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'usuarios',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            20 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'ajustes',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            21 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'ajustes',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            22 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'ajustes',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            23 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'ajustes',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            24 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'ajustes',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            25 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'transferencia de datos',
                'id' => 26,
                'key' => 'browse_transfer_data',
                'table_name' => 'transfer_data',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            26 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'transferencia de datos',
                'id' => 27,
                'key' => 'read_transfer_data',
                'table_name' => 'transfer_data',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            27 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'transferencia de datos',
                'id' => 28,
                'key' => 'edit_transfer_data',
                'table_name' => 'transfer_data',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            28 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'transferencia de datos',
                'id' => 29,
                'key' => 'add_transfer_data',
                'table_name' => 'transfer_data',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            29 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'transferencia de datos',
                'id' => 30,
                'key' => 'delete_transfer_data',
                'table_name' => 'transfer_data',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            30 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'módulos',
                'id' => 31,
                'key' => 'browse_modules',
                'table_name' => 'modules',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            31 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'módulos',
                'id' => 32,
                'key' => 'read_modules',
                'table_name' => 'modules',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            32 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'módulos',
                'id' => 33,
                'key' => 'edit_modules',
                'table_name' => 'modules',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            33 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'módulos',
                'id' => 34,
                'key' => 'add_modules',
                'table_name' => 'modules',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            34 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'módulos',
                'id' => 35,
                'key' => 'delete_modules',
                'table_name' => 'modules',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            35 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'métodos de pago',
                'id' => 36,
                'key' => 'browse_payment_methods',
                'table_name' => 'payment_methods',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            36 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'métodos de pago',
                'id' => 37,
                'key' => 'read_payment_methods',
                'table_name' => 'payment_methods',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            37 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'métodos de pago',
                'id' => 38,
                'key' => 'edit_payment_methods',
                'table_name' => 'payment_methods',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            38 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'métodos de pago',
                'id' => 39,
                'key' => 'add_payment_methods',
                'table_name' => 'payment_methods',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            39 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'métodos de pago',
                'id' => 40,
                'key' => 'delete_payment_methods',
                'table_name' => 'payment_methods',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            40 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'categorías',
                'id' => 41,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            41 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'categorías',
                'id' => 42,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            42 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'categorías',
                'id' => 43,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            43 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'categorías',
                'id' => 44,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            44 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'categorías',
                'id' => 45,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            45 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'oficinas',
                'id' => 46,
                'key' => 'browse_offices',
                'table_name' => 'offices',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            46 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'oficinas',
                'id' => 47,
                'key' => 'read_offices',
                'table_name' => 'offices',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            47 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'oficinas',
                'id' => 48,
                'key' => 'edit_offices',
                'table_name' => 'offices',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            48 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'oficinas',
                'id' => 49,
                'key' => 'add_offices',
                'table_name' => 'offices',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            49 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'oficinas',
                'id' => 50,
                'key' => 'delete_offices',
                'table_name' => 'offices',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            50 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'unidades',
                'id' => 51,
                'key' => 'browse_units',
                'table_name' => 'units',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            51 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'unidades',
                'id' => 52,
                'key' => 'read_units',
                'table_name' => 'units',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            52 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'unidades',
                'id' => 53,
                'key' => 'edit_units',
                'table_name' => 'units',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            53 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'unidades',
                'id' => 54,
                'key' => 'add_units',
                'table_name' => 'units',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            54 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'unidades',
                'id' => 55,
                'key' => 'delete_units',
                'table_name' => 'units',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            55 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'productos',
                'id' => 56,
                'key' => 'browse_products',
                'table_name' => 'products',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            56 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'productos',
                'id' => 57,
                'key' => 'read_products',
                'table_name' => 'products',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            57 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'productos',
                'id' => 58,
                'key' => 'edit_products',
                'table_name' => 'products',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            58 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'productos',
                'id' => 59,
                'key' => 'add_products',
                'table_name' => 'products',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            59 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'productos',
                'id' => 60,
                'key' => 'delete_products',
                'table_name' => 'products',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            60 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'tipos de movimientos',
                'id' => 61,
                'key' => 'browse_movement_types',
                'table_name' => 'movement_types',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            61 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'tipos de movimientos',
                'id' => 62,
                'key' => 'read_movement_types',
                'table_name' => 'movement_types',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            62 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'tipos de movimientos',
                'id' => 63,
                'key' => 'edit_movement_types',
                'table_name' => 'movement_types',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            63 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'tipos de movimientos',
                'id' => 64,
                'key' => 'add_movement_types',
                'table_name' => 'movement_types',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            64 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'tipos de movimientos',
                'id' => 65,
                'key' => 'delete_movement_types',
                'table_name' => 'movement_types',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            65 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'inventarios',
                'id' => 66,
                'key' => 'browse_inventories',
                'table_name' => 'inventories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            66 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'inventarios',
                'id' => 67,
                'key' => 'read_inventories',
                'table_name' => 'inventories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            67 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'inventarios',
                'id' => 68,
                'key' => 'edit_inventories',
                'table_name' => 'inventories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            68 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'inventarios',
                'id' => 69,
                'key' => 'add_inventories',
                'table_name' => 'inventories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            69 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'inventarios',
                'id' => 70,
                'key' => 'delete_inventories',
                'table_name' => 'inventories',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            70 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'clientes',
                'id' => 71,
                'key' => 'browse_customers',
                'table_name' => 'customers',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            71 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'clientes',
                'id' => 72,
                'key' => 'read_customers',
                'table_name' => 'customers',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            72 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'clientes',
                'id' => 73,
                'key' => 'edit_customers',
                'table_name' => 'customers',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            73 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'clientes',
                'id' => 74,
                'key' => 'add_customers',
                'table_name' => 'customers',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            74 => 
            array (
                'created_at' => '2023-05-18 10:57:58',
                'display_name' => 'clientes',
                'id' => 75,
                'key' => 'delete_customers',
                'table_name' => 'customers',
                'updated_at' => '2023-05-18 10:57:58',
            ),
            75 => 
            array (
                'created_at' => '2023-05-18 11:01:23',
                'display_name' => 'plantillas de whatsapp',
                'id' => 76,
                'key' => 'browse_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            76 => 
            array (
                'created_at' => '2023-05-18 11:01:23',
                'display_name' => 'plantillas de whatsapp',
                'id' => 77,
                'key' => 'read_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            77 => 
            array (
                'created_at' => '2023-05-18 11:01:23',
                'display_name' => 'plantillas de whatsapp',
                'id' => 78,
                'key' => 'edit_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            78 => 
            array (
                'created_at' => '2023-05-18 11:01:23',
                'display_name' => 'plantillas de whatsapp',
                'id' => 79,
                'key' => 'add_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            79 => 
            array (
                'created_at' => '2023-05-18 11:01:23',
                'display_name' => 'plantillas de whatsapp',
                'id' => 80,
                'key' => 'delete_whatsapp_templates',
                'table_name' => 'whatsapp_templates',
                'updated_at' => '2023-05-18 11:01:23',
            ),
            80 => 
            array (
                'created_at' => '2024-11-04 21:09:10',
                'display_name' => 'mascotas',
                'id' => 81,
                'key' => 'browse_pets',
                'table_name' => 'pets',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            81 => 
            array (
                'created_at' => '2024-11-04 21:09:10',
                'display_name' => 'mascotas',
                'id' => 82,
                'key' => 'read_pets',
                'table_name' => 'pets',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            82 => 
            array (
                'created_at' => '2024-11-04 21:09:10',
                'display_name' => 'mascotas',
                'id' => 83,
                'key' => 'edit_pets',
                'table_name' => 'pets',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            83 => 
            array (
                'created_at' => '2024-11-04 21:09:10',
                'display_name' => 'mascotas',
                'id' => 84,
                'key' => 'add_pets',
                'table_name' => 'pets',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            84 => 
            array (
                'created_at' => '2024-11-04 21:09:10',
                'display_name' => 'mascotas',
                'id' => 85,
                'key' => 'delete_pets',
                'table_name' => 'pets',
                'updated_at' => '2024-11-04 21:09:10',
            ),
            85 => 
            array (
                'created_at' => '2024-11-04 21:15:49',
                'display_name' => 'servicios',
                'id' => 86,
                'key' => 'browse_services',
                'table_name' => 'services',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            86 => 
            array (
                'created_at' => '2024-11-04 21:15:49',
                'display_name' => 'servicios',
                'id' => 87,
                'key' => 'read_services',
                'table_name' => 'services',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            87 => 
            array (
                'created_at' => '2024-11-04 21:15:49',
                'display_name' => 'servicios',
                'id' => 88,
                'key' => 'edit_services',
                'table_name' => 'services',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            88 => 
            array (
                'created_at' => '2024-11-04 21:15:49',
                'display_name' => 'servicios',
                'id' => 89,
                'key' => 'add_services',
                'table_name' => 'services',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            89 => 
            array (
                'created_at' => '2024-11-04 21:15:49',
                'display_name' => 'servicios',
                'id' => 90,
                'key' => 'delete_services',
                'table_name' => 'services',
                'updated_at' => '2024-11-04 21:15:49',
            ),
            90 => 
            array (
                'created_at' => '2024-11-06 17:49:22',
                'display_name' => 'gastos',
                'id' => 91,
                'key' => 'browse_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            91 => 
            array (
                'created_at' => '2024-11-06 17:49:22',
                'display_name' => 'gastos',
                'id' => 92,
                'key' => 'read_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            92 => 
            array (
                'created_at' => '2024-11-06 17:49:22',
                'display_name' => 'gastos',
                'id' => 93,
                'key' => 'edit_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            93 => 
            array (
                'created_at' => '2024-11-06 17:49:22',
                'display_name' => 'gastos',
                'id' => 94,
                'key' => 'add_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            94 => 
            array (
                'created_at' => '2024-11-06 17:49:22',
                'display_name' => 'gastos',
                'id' => 95,
                'key' => 'delete_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2024-11-06 17:49:22',
            ),
            95 => 
            array (
                'created_at' => '2024-11-06 17:55:08',
                'display_name' => 'citas',
                'id' => 96,
                'key' => 'browse_dates',
                'table_name' => 'dates',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            96 => 
            array (
                'created_at' => '2024-11-06 17:55:08',
                'display_name' => 'citas',
                'id' => 97,
                'key' => 'read_dates',
                'table_name' => 'dates',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            97 => 
            array (
                'created_at' => '2024-11-06 17:55:08',
                'display_name' => 'citas',
                'id' => 98,
                'key' => 'edit_dates',
                'table_name' => 'dates',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            98 => 
            array (
                'created_at' => '2024-11-06 17:55:08',
                'display_name' => 'citas',
                'id' => 99,
                'key' => 'add_dates',
                'table_name' => 'dates',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            99 => 
            array (
                'created_at' => '2024-11-06 17:55:08',
                'display_name' => 'citas',
                'id' => 100,
                'key' => 'delete_dates',
                'table_name' => 'dates',
                'updated_at' => '2024-11-06 17:55:08',
            ),
            100 => 
            array (
                'created_at' => '2024-11-06 18:00:20',
                'display_name' => 'cortes de caja',
                'id' => 101,
                'key' => 'browse_cash_audits',
                'table_name' => 'cash_audits',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            101 => 
            array (
                'created_at' => '2024-11-06 18:00:20',
                'display_name' => 'cortes de caja',
                'id' => 102,
                'key' => 'read_cash_audits',
                'table_name' => 'cash_audits',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            102 => 
            array (
                'created_at' => '2024-11-06 18:00:20',
                'display_name' => 'cortes de caja',
                'id' => 103,
                'key' => 'edit_cash_audits',
                'table_name' => 'cash_audits',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            103 => 
            array (
                'created_at' => '2024-11-06 18:00:20',
                'display_name' => 'cortes de caja',
                'id' => 104,
                'key' => 'add_cash_audits',
                'table_name' => 'cash_audits',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            104 => 
            array (
                'created_at' => '2024-11-06 18:00:20',
                'display_name' => 'cortes de caja',
                'id' => 105,
                'key' => 'delete_cash_audits',
                'table_name' => 'cash_audits',
                'updated_at' => '2024-11-06 18:00:20',
            ),
            105 => 
            array (
                'created_at' => '2024-11-06 18:07:09',
                'display_name' => 'recibos',
                'id' => 106,
                'key' => 'browse_receipts',
                'table_name' => 'receipts',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            106 => 
            array (
                'created_at' => '2024-11-06 18:07:09',
                'display_name' => 'recibos',
                'id' => 107,
                'key' => 'read_receipts',
                'table_name' => 'receipts',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            107 => 
            array (
                'created_at' => '2024-11-06 18:07:09',
                'display_name' => 'recibos',
                'id' => 108,
                'key' => 'edit_receipts',
                'table_name' => 'receipts',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            108 => 
            array (
                'created_at' => '2024-11-06 18:07:09',
                'display_name' => 'recibos',
                'id' => 109,
                'key' => 'add_receipts',
                'table_name' => 'receipts',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            109 => 
            array (
                'created_at' => '2024-11-06 18:07:09',
                'display_name' => 'recibos',
                'id' => 110,
                'key' => 'delete_receipts',
                'table_name' => 'receipts',
                'updated_at' => '2024-11-06 18:07:09',
            ),
            110 => 
            array (
                'created_at' => '2024-11-06 18:18:07',
                'display_name' => 'calendarios',
                'id' => 111,
                'key' => 'browse_calendars',
                'table_name' => 'calendars',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            111 => 
            array (
                'created_at' => '2024-11-06 18:18:07',
                'display_name' => 'calendarios',
                'id' => 112,
                'key' => 'read_calendars',
                'table_name' => 'calendars',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            112 => 
            array (
                'created_at' => '2024-11-06 18:18:07',
                'display_name' => 'calendarios',
                'id' => 113,
                'key' => 'edit_calendars',
                'table_name' => 'calendars',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            113 => 
            array (
                'created_at' => '2024-11-06 18:18:07',
                'display_name' => 'calendarios',
                'id' => 114,
                'key' => 'add_calendars',
                'table_name' => 'calendars',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            114 => 
            array (
                'created_at' => '2024-11-06 18:18:07',
                'display_name' => 'calendarios',
                'id' => 115,
                'key' => 'delete_calendars',
                'table_name' => 'calendars',
                'updated_at' => '2024-11-06 18:18:07',
            ),
            115 => 
            array (
                'created_at' => '2024-11-06 18:29:14',
                'display_name' => 'historial medico',
                'id' => 116,
                'key' => 'browse_medical_histories',
                'table_name' => 'medical_histories',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            116 => 
            array (
                'created_at' => '2024-11-06 18:29:14',
                'display_name' => 'historial medico',
                'id' => 117,
                'key' => 'read_medical_histories',
                'table_name' => 'medical_histories',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            117 => 
            array (
                'created_at' => '2024-11-06 18:29:14',
                'display_name' => 'historial medico',
                'id' => 118,
                'key' => 'edit_medical_histories',
                'table_name' => 'medical_histories',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            118 => 
            array (
                'created_at' => '2024-11-06 18:29:14',
                'display_name' => 'historial medico',
                'id' => 119,
                'key' => 'add_medical_histories',
                'table_name' => 'medical_histories',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            119 => 
            array (
                'created_at' => '2024-11-06 18:29:14',
                'display_name' => 'historial medico',
                'id' => 120,
                'key' => 'delete_medical_histories',
                'table_name' => 'medical_histories',
                'updated_at' => '2024-11-06 18:29:14',
            ),
            120 => 
            array (
                'created_at' => '2024-11-06 18:39:44',
                'display_name' => 'vacunas',
                'id' => 121,
                'key' => 'browse_vaccines',
                'table_name' => 'vaccines',
                'updated_at' => '2024-11-06 18:39:44',
            ),
            121 => 
            array (
                'created_at' => '2024-11-06 18:39:44',
                'display_name' => 'vacunas',
                'id' => 122,
                'key' => 'read_vaccines',
                'table_name' => 'vaccines',
                'updated_at' => '2024-11-06 18:39:44',
            ),
            122 => 
            array (
                'created_at' => '2024-11-06 18:39:44',
                'display_name' => 'vacunas',
                'id' => 123,
                'key' => 'edit_vaccines',
                'table_name' => 'vaccines',
                'updated_at' => '2024-11-06 18:39:44',
            ),
            123 => 
            array (
                'created_at' => '2024-11-06 18:39:44',
                'display_name' => 'vacunas',
                'id' => 124,
                'key' => 'add_vaccines',
                'table_name' => 'vaccines',
                'updated_at' => '2024-11-06 18:39:44',
            ),
            124 => 
            array (
                'created_at' => '2024-11-06 18:39:44',
                'display_name' => 'vacunas',
                'id' => 125,
                'key' => 'delete_vaccines',
                'table_name' => 'vaccines',
                'updated_at' => '2024-11-06 18:39:44',
            ),
        ));
        
        
    }
}