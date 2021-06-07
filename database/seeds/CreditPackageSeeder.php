<?php

use Illuminate\Database\Seeder;

class CreditPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credits_packages')->insert([
           'package_name' => 'Silver',
            'package_description' => 'Sliver Package special for your startup idea, you can buy all xelenic services with offer',
            'price' => 50,
            'offer_price' => 40,
            'package_status' => 'published',
            'credits' => 50
        ]);

        DB::table('credits_packages')->insert([
            'package_name' => 'Gold',
            'package_description' => 'Gold Package special for create your own project, You can buy all xelenic services with offer',
            'price' => 100,
            'offer_price' => 90,
            'package_status' => 'published',
            'credits' => 120
        ]);

        DB::table('credits_packages')->insert([
            'package_name' => 'Platinum',
            'package_description' => 'Sliver Package special for your startup idea, You can buy all xelenic services with offer',
            'price' => 200,
            'offer_price' => 180,
            'package_status' => 'published',
            'credits' => 200
        ]);

    }
}
