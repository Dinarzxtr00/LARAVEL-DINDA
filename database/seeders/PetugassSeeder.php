<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PetugassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugasIds = DB::table('petugass')->pluck('id')->toArray();

        if (!empty($petugasIds)) {
            DB::table('petugass')->insert([
                'petugas_id' => $petugasIds[array_rand($petugasIds)],
                'nama_petugas' => Str::random(35),
                'username' => Str::random(25),
                'password' => Str::random(32),
                'telp' => Str::random(13),
                'status' => collect(['proses', 'selesai'])->random(),
            ]);
        } else {
            $this->command->info('No existing petugass found to seed.');
        }
    }
}