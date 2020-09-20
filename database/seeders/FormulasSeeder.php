<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormulasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formulas')->insert([
            [
                'official_name' => "GPE19",
                'name' => 'Sasha',
                'year' => '2019',
                'engine' => "KTM 450 SX-F",
                'weight' => '168',
                'power' => '52',
                'fuel' => "E85",
                'acceleration' => '3.3',
                'gearbox' => 'Sequential four speed'

            ],

            [
                'official_name' => "GPE17",
                'name' => 'Shakira',
                'year' => '2017',
                'engine' => "KTM 450 SX-F",
                'weight' => '162',
                'power' => '52',
                'fuel' => "E85",
                'acceleration' => '3.3',
                'gearbox' => 'Sequential four speed'
            ]
        ]);
    }
}
