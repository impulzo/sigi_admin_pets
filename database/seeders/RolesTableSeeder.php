<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2022-11-09 13:18:29',
                'display_name' => 'Support',
                'id' => 1,
                'name' => 'support',
                'updated_at' => '2022-11-09 14:03:47',
            ),
            1 => 
            array (
                'created_at' => '2022-11-09 13:18:29',
                'display_name' => 'Administrador',
                'id' => 2,
                'name' => 'admin',
                'updated_at' => '2022-11-09 14:06:03',
            ),
            2 => 
            array (
                'created_at' => '2023-04-13 21:21:09',
                'display_name' => 'Cliente',
                'id' => 3,
                'name' => 'customer',
                'updated_at' => '2023-04-13 21:21:09',
            ),
            3 => 
            array (
                'created_at' => '2024-03-28 18:19:37',
                'display_name' => 'Mostrador',
                'id' => 4,
                'name' => 'seller',
                'updated_at' => '2024-03-28 18:19:37',
            ),
            4 => 
            array (
                'created_at' => '2025-03-31 16:39:59',
                'display_name' => 'Super User',
                'id' => 5,
                'name' => 'root',
                'updated_at' => '2025-03-31 16:39:59',
            ),
        ));
        
        
    }
}