<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bungas')->insert([
            'nama'=>'mawar',
            'stok'=> 10,
            'harga'=>15000,
            'image'=>'',
        ]);
    }
}
