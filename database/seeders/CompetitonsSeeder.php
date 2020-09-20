<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competitions')->insert([
            [
                'country' => "de",
                'name' => 'FS Germany',
                'year' => '2019',
                'formula_id' => 1,
            ],
            [
                'country' => "es",
                'name' => 'FS Spain',
                'year' => '2019',
                'formula_id' => 1,
            ],
            [
                'country' => "hu",
                'name' => 'FS East',
                'year' => '2019',
                'formula_id' => 1,
            ]

        ]);
    }
}
