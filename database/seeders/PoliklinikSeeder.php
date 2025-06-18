<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poliklinik;

class PoliklinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poliklinikss = [
            [
                'id'=>'1',
                'nama' => 'Gigi',
                'deskripsi' => 'Lorem ipsum dolor sit amet',          
            ],
            [
                'id'=>'2',
                'nama' => 'Anak',
                'deskripsi' => 'Lorem ipsum dolor sit amet',   
            ],
            [
                'id'=>'3',
                'nama' => 'Penyakit Dalam',
                'deskripsi' => 'Lorem ipsum dolor sit amet',
            ],
        ];

        foreach ($poliklinikss as $Poliklinik) {
            Poliklinik::create($Poliklinik);
        }
    }
}

