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
            'created_at' =>  NULL ,
            'updated_at' => NULL,
        ],
        [
            'id' => NULL,
            'nom_type' => 'Appartement',
            'created_at' =>  NULL ,
            'updated_at' => NULL,

        ],
        [
            'id' => NULL,
            'nom_type' => 'Studio',
            'created_at' =>  NULL ,
            'updated_at' =>  NULL,

        ],
        [
            'id' => NULL,
            'nom_type' => 'Terrain',
            'created_at' => NULL ,
            'updated_at' =>  NULL,

        ],

    ];

    public function run(): void
    {

        DB::table('real_state_types')->insert($this->real_states_type);
    }
}
