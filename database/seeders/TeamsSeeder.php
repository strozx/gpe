<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Jure',
                'surname' => 'Pigac',
                'mail' => 'example@gpe.si',
                'telephone' => '031031031',
                'picture' => 'example.png',
                'subdepartments_id' => 2
            ],
            [
                'name' => 'Petra',
                'surname' => 'Polanec',
                'mail' => 'example@gpe.si',
                'telephone' => '031031031',
                'picture' => 'example.png',
                'subdepartments_id' => 1
            ],
            [
                'name' => 'Adam',
                'surname' => 'Grah',
                'mail' => 'example@gpe.si',
                'telephone' => '031031031',
                'picture' => 'example.png',
                'subdepartments_id' => 3
            ],
            [
                'name' => 'Jakob',
                'surname' => 'Razdevšek',
                'mail' => 'example@gpe.si',
                'telephone' => '031031031',
                'picture' => 'example.png',
                'subdepartments_id' => 4
            ],

            [
                'name' => 'Nik',
                'surname' => 'Strozak',
                'mail' => 'example@gpe.si',
                'telephone' => '031031031',
                'picture' => 'example.png',
                'subdepartments_id' => 4
            ],
        ]);
    }
}
