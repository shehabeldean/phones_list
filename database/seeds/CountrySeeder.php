<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            [
                'name' => 'Cameroon',
                'code' => '(237)',
                'reg' => '\(237\)\ ?[2368]\d{7,8}$',
            ],
            [
                'name' => 'Ethiopia',
                'code' => '(251)',
                'reg' => '\(251\)\ ?[1-59]\d{8}$',
            ],
            [
                'name' => 'Morocco',
                'code' => '(212)',
                'reg' => '\(258\)\ ?[28]\d{7,8}$',
            ],
            [
                'name' => 'Mozambique',
                'code' => '(258)',
                'reg' => '\(237\)\ ?[2368]\d{7,8}$',
            ],
            [
                'name' => 'Uganda',
                'code' => '(256)',
                'reg' => '\(256\)\ ?\d{9}$',
            ],
        ]);
    }
}
