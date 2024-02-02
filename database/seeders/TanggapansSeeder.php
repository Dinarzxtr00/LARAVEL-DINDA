<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TanggapansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanggapanIds = DB::table('tanggapans')->pluck('id_tanggapan')->toArray(); // Assuming 'id' is the primary key
        $pengaduanIds = DB::table('pengaduans')->pluck('id')->toArray();
        $petugasIds = DB::table('petugass')->pluck('id')->toArray();

        if (!empty($tanggapanIds) && !empty($pengaduanIds) && !empty($petugasIds)) {
            DB::table('tanggapans')->insert([
                'tanggapan_id' => $tanggapanIds[array_rand($tanggapanIds)],
                'pengaduan_id' => $pengaduanIds[array_rand($pengaduanIds)],
                'tgl_tanggapan' => now(),
                'tanggapan' => Str::random(),
                'petugas_id' => $petugasIds[array_rand($petugasIds)],
            ]);
        } else {
            $this->command->info('No existing tanggapans, pengaduans, or petugass found to seed.');
        }
    }
}
