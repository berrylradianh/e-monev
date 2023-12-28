<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    public function index()
    {
        try {
            return view('pages.dashboard.pelaporan');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
