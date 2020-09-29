<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubdepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subdepartments')->insert([
            [
                'name' => 'Vodja aerodinamike',
                'departments_id' => 5
            ],
            [
                'name' => 'Vodja ekipe',
                'departments_id' => 1
            ],
            [
                'name' => 'Tehnični vodja',
                'departments_id' => 1
            ],
            [
                'name' => 'član',
                'departments_id' => 5
            ],
        ]);
    }
}
