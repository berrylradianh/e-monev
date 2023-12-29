<?php

namespace Database\Seeders;

use App\Models\Pelaporan;
use Illuminate\Database\Seeder;

class PelaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelaporans = [
            ['no_rm' => '123456', 'form1' => false, 'form2' => false, 'form3' => false],
            ['no_rm' => '012973', 'form1' => false, 'form2' => false, 'form3' => false],
            ['no_rm' => '102946', 'form1' => false, 'form2' => false, 'form3' => false],
            ['no_rm' => '126740', 'form1' => false, 'form2' => false, 'form3' => false],
            ['no_rm' => '126741', 'form1' => false, 'form2' => false, 'form3' => false],
        ];

        foreach ($pelaporans as $pelaporan) {
            Pelaporan::create($pelaporan);
        }
    }
}
