<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            1 => '東京',
            2 => '大阪',
            3 => '福岡',
        ];

        foreach ($areas as $id => $name) {
            Area::create([
                'id' => $id,
                'name' => $name
            ]);
        }
    }
}