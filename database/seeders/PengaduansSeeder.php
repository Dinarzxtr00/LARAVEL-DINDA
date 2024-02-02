<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PengaduansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengaduanIds = DB::table('pengaduans')->pluck('id')->toArray();

        if (!empty($pengaduanIds)) {
            DB::table('pengaduans')->insert([
                'pengaduan_id' => $pengaduanIds[array_rand($pengaduanIds)],
                'tgl_pengaduan' => now(),
                'nik' => Str::random(16),
                'isi_laporan' => Str::random(),
                'foto' => Str::random(225),
                'status' => collect(['proses', 'selesai'])->random(),
            ]);
        } else {
            $this->command->info('No existing pengaduans found to seed.');
        }
    }
}
