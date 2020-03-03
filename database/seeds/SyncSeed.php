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
        $abilitiesDirektur = Ability::where('menu_id', '<>', null)->get();
        $abilitiesAkuntan = Ability::where('menu_id', '>', 5)->get();
    	$user = \App\User::where('name', 'Admin')->first();
        $akuntan = \App\User::where('name', 'Akuntan')->first();
        $direktur = \App\User::where('name', 'Direktur')->first();

    	foreach ($abilities as $abi) {
    		Bouncer::allow($user)->to($abi);            
    	}

        foreach($abilitiesDirektur as $abiDirektur) {
            Bouncer::allow($direktur)->to($abiDirektur);   
        }

        foreach ($abilitiesAkuntan as $abiAkuntan) {
            Bouncer::allow($akuntan)->to($abiAkuntan);
        }
    }
}
