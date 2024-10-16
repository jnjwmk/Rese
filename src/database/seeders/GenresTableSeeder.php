<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            1 => '寿司',
            2 => '焼肉',
            3 => '居酒屋',
            4 => 'イタリアン',
            5 => 'ラーメン',
        ];

        foreach ($genres as $id => $name){
            Genre::create([
                'id' => $id,
                'name' => $name
            ]);
        }
    }
}