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
        $questions = [
            "Apakah RS Petrokimia Gresik mendukung pelaksanaan ERM ?",
            "Apakah dengan adanya ERM dapat membantu petugas dalam penyediaan rekam medis pelayanan rawat jalan ?",
            "Apakah fitur-fitur ERM sudah sesuai kebutuhan untuk ke efektifan kerja petugas dalam menginput data pasien ?",
            "Apakah ERM memudahkan petugas untuk disiplin terhadap pengisian assesmen awal pasien rawat jalan ?",
            "Apakah ERM dapat menganalisis data terkait pelaporan mutu pelayanan rawat jalan?",
            "Apakan penerapan ERM sudah sesuai ketentuan PERMENKES No 24 tahun 2022 ?",
            "Apakah menu-menu ERM sudah memenuhi indikator-indikator standar mutu pelayanan rumah sakit ?",
            "Apakah ERM dapat membantu menyelesaikan masalah terkait indikator mutu pelayanan RJ yang sesuai SOP?",
            "Apakah ERM dapat menjadi salah satu acuan dalam monitoring kinerja petugas?",
            "Apakah perlu dilakukan evaluasi berkala untuk melihat masalah serta solusi terhadap pemanfaatan ERM di RS Petrokimia Gresik ?",
            "Apakah kebijakan dalam penggunaan ERM mempertimbangkan latar belakang pendidikan pengguna ERM ?",
            "Apakah pengimplementasin ERM mudah digunakan oleh petugas?",
            "Apakah perlu dilakukan pelatihan atau sosialisasi terhadap pemakaian ERM saat diberlakukannya paperless ?",
            "Apakah terdapat perbedaan hak akses petugas yang hendak melakukan pengisian pada ERM?",
        ];

        foreach ($questions as $question) {
            Question::create([
                'question' => $question,
            ]);
        }
    }
}
