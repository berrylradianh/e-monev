<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        try {
            $total_data = Pelaporan::count();
            $all_forms_true_count = Pelaporan::where('form1', true)
                ->where('form2', true)
                ->where('form3', true)
                ->count();
            $data_lengkap = ceil(($all_forms_true_count / $total_data) * 100);

            $data_tidak_lengkap = 100 - $data_lengkap;

            $columns = DB::getSchemaBuilder()->getColumnListing('answers');
            $columns = array_filter($columns, function ($column) {
                return strncmp($column, 'pertanyaan', 10) === 0;
            });

            $total_jawaban_ya = [];
            foreach ($columns as $column) {
                $column_name = DB::getTablePrefix() . $column;
                $total_jawaban_ya[] = DB::raw("SUM(IF($column_name = 'Ya', 1, 0)) as $column");
            }

            $total_user = DB::table('answers')->distinct('user_id')->count();
            $result = DB::table('answers')->select($total_jawaban_ya)->first();
            $total_jawaban_ya_semua = array_sum((array)$result);
            $persentase_jawaban_ya = ($total_user > 0) ? ceil(($total_jawaban_ya_semua / ($total_user * count($columns))) * 100) : 0;
            $persentase_jawaban_tidak = 100 - $persentase_jawaban_ya;

            return view('pages.dashboard.dashboard', compact(['data_lengkap', 'data_tidak_lengkap', 'persentase_jawaban_ya', 'persentase_jawaban_tidak']));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
