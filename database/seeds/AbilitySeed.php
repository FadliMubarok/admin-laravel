<?php

use Illuminate\Database\Seeder;

class AbilitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [    		    	    		
            [
                'name' => 'settings_index',
                'menu_id' => 1,
            ],
    		[
    			'name' => 'menus_index',
    			'menu_id' => 2,
    		],
            [
                'name' => 'menus_create',                
            ],
            [
                'name' => 'menus_update',
            ],
            [
                'name' => 'menus_delete',                
            ],
            [
                'name' => 'users_index',
                'menu_id' => 3,
            ],
            [
                'name' => 'users_create',                
            ],
            [
                'name' => 'users_update',                
            ],
            [
                'name' => 'users_delete',                
            ],
            [
                'name' => 'roles_index',
                'menu_id' => 4,
            ],
            [
                'name' => 'roles_create',
            ],
            [
                'name' => 'roles_update',                
            ],
            [
                'name' => 'roles_delete',                
            ],            
    		[
    			'name' => 'abilities_index',
    			'menu_id' => 5,
    		],
            [
                'name' => 'abilities_create', 
            ],
            [
                'name' => 'abilities_update',                
            ],
            [
                'name' => 'abilities_delete',                
            ],
            [
                'name' => 'dashboard_index',
                'menu_id' => 6,
            ],
        ];

        foreach ($data as $key => $row) {
    		DB::table('abilities')->insert($row);
    	}
    }
}
