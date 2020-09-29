<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => 'vodstvo',
            ],

            [
                'name' => 'Šasija',
            ],

            [
                'name' => 'podvozje',
            ],

            [
                'name' => 'pogonski sklop',
            ],
            [
                'name' => 'aerodinamika',
            ],
            [
                'name' => 'elektronika',
            ],
            [
                'name' => 'pr, organizacija in ekonomija',
            ],

        ]);
    }
}
