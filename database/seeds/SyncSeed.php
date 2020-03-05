<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\Database\Ability;

class SyncSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abilities = Ability::all();        
    	$user = \App\User::where('name', 'Admin')->first();
        
    	foreach ($abilities as $abi) {
    		Bouncer::allow($user)->to($abi);            
    	}        
    }
}
