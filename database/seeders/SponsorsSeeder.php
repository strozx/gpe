<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsors')->insert([
        [
            'year' => "2019",
            'name' => 'Akrapovič',
            'logo' => 'akr.png',
        ],
        [
            'year' => "2019",
            'name' => 'AVL',
            'logo' => 'avl.png',
        ],
        [
            'year' => "2019",
            'name' => 'Dewesoft',
            'logo' => 'dewesoft.png',
        ],
        [
            'year' => "2019",
            'name' => 'ROTO',
            'logo' => 'roto.png',
        ],
            [
            'year' => "2019",
            'name' => 'ŠOUM',
            'logo' => 'soum.png',
        ],
            [
            'year' => "2019",
            'name' => 'Veplas',
            'logo' => 'veplas.png',
        ],

    ]);
    }
}
