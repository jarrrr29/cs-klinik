<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Action::insert([
        ['name' => 'Cabut Gigi', 'price' => 150000],
        ['name' => 'Kontrol Gigi', 'price' => 100000],
        ['name' => 'Scaling', 'price' => 200000],
        ['name' => 'Tambal Gigi', 'price' => 180000],
    ]);
}

}
