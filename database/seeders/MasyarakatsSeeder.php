<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class MasyarakatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('masyarakats')->Insert([
            'nik' => str::random(16),
            'nama' => str::random(35),
            'username' => str::random(25),
            'password' => str::random(32),
            'telp' => str::random(13),
        ]);
        //
    }
}
