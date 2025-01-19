<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealStateTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $real_states_type = [
        [
            'id' => NULL,
            'nom_type' => 'Villa',
            'class_rech' => 'str',
            'created_at' =>  NULL ,
            'updated_at' => NULL,
        ],
        [
            'id' => NULL,
            'nom_type' => 'Appartement',
            'class_rech' => 'adv',
            'created_at' =>  NULL ,
            'updated_at' => NULL,

        ],
        [
            'id' => NULL,
            'nom_type' => 'Studio',
            'class_rech' => 'stu',
            'created_at' =>  NULL ,
            'updated_at' =>  NULL,

        ],
        [
            'id' => NULL,
            'nom_type' => 'Terrain',
            'class_rech' => 'rac',
            'created_at' => NULL ,
            'updated_at' =>  NULL,

        ],

    ];

    public function run(): void
    {

        DB::table('real_state_types')->insert($this->real_states_type);
    }
}
