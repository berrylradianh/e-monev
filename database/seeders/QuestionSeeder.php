<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Question::create([
            'question' => 'Apakah RS Petrokimia Gresik mendukung pelaksanaan ERM ?',
        ]);

        Question::create([
            'question' => 'Apakah dengan adanya ERM dapat membantu petugas dalam penyediaan rekam medis pelayanan rawat jalan ?',
        ]);
        Question::create([
            'question' => 'Apakah fitur-fitur ERM sudah sesuai kebutuhan untuk ke efektifan kerja petugas dalam menginput data pasien ?',
        ]);
        Question::create([
            'question' => 'Apakah ERM memudahkan petugas untuk disiplin terhadap pengisian assesmen awal pasien rawat jalan ?',
        ]);
        Question::create([
            'question' => 'Apakah ERM memudahkan petugas untuk disiplin terhadap pengisian assesmen awal pasien rawat jalan ?',
        ]);
        Question::create([
            'question' => 'Apakan penerapan ERM sudah sesuai ketentuan PERMENKES No 24 tahun 2022 ?',
        ]);
        Question::create([
            'question' => 'Apakah ERM dapat menganalisis data terkait pelaporan mutu pelayanan rawat jalan ?',
        ]);
        Question::create([
            'question' => 'Apakah menu-menu ERM sudah memenuhi indikator-indikator standar mutu pelayanan rumah sakit ?',
        ]);
        Question::create([
            'question' => 'Apakah ERM dapat membantu menyelesaikan masalah terkait indikator mutu pelayanan RJ yang sesuai SOP ?',
        ]);
        Question::create([
            'question' => 'Apakah ERM dapat menjadi salah satu acuan dalam monitoring kinerja petugas ?',
        ]);
        Question::create([
            'question' => 'Apakah perlu dilakukan evaluasi berkala untuk melihat masalah serta solusi terhadap pemanfaatan ERM di RS Petrokimia Gresik ?',
        ]);
        Question::create([
            'question' => 'Apakah kebijakan dalam penggunaan ERM mempertimbangkan latar belakang pendidikan pengguna ERM ?',
        ]);
        Question::create([
            'question' => 'Apakah pengimplementasin ERM mudah digunakan oleh petugas ?',
        ]);
        Question::create([
            'question' => 'Apakah perlu dilakukan pelatihan atau sosialisasi terhadap pemakaian ERM saat diberlakukannya paperless ?',
        ]);
        Question::create([
            'question' => 'Apakah terdapat perbedaan hak akses petugas yang hendak melakukan pengisian pada ERM ?',
        ]);
    }
}
