<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuSeed::class);
        $this->call(AbilitySeed::class);
        $this->call(UserSeed::class);
        $this->call(SyncSeed::class);
    }
}
