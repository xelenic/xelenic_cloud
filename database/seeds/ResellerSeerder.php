<?php

use Illuminate\Database\Seeder;

class ResellerSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resellers')->insert([
            'name' => 'xelenic',
            'auth_key' => 'IVO50J51NKITHJU3S0WW8221NG7A5TAH',
            'port' => 2087,
            'username' => 'xelenic',
            'url' => 'https://xelenic.com',
        ]);
    }
}
