<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeed extends Seeder
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
    			'label' => 'Settings',
    			'url' => '#',
    			'ikon' => 'wrench',
    			'type' => 'parent',
    			'order' => 2,
    		],
    		[
    			'label' => 'Menus',
    			'url' => 'admin.menus.index',
    			'ikon' => 'square',
    			'type' => 'submenu',
    			'order' => 3,
    			'parent_id' => 1,
    		],
    		[
    			'label' => 'Users',
    			'url' => 'admin.users.index',
    			'ikon' => 'user',
    			'type' => 'submenu',
    			'order' => 2,
    			'parent_id' => 1,
    		],
    		[
    			'label' => 'Roles',
    			'url' => 'admin.roles.index',
    			'ikon' => 'male',
    			'type' => 'submenu',
    			'order' => 1,
    			'parent_id' => 1,
    		],
    		[
    			'label' => 'Abilities',
    			'url' => 'admin.abilities.index',
    			'ikon' => 'th-list',
    			'type' => 'submenu',
    			'order' => 0,
    			'parent_id' => 1,
    		],
            [
                'label' => 'Dashboard',
                'url' => 'admin.home',
                'ikon' => 'th-large',
                'type' => 'single',
                'order' => 0,
            ],
    	];

    	foreach ($data as $row) {
    		Menu::create($row);
    	}
    }
}
