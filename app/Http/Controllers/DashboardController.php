<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        try {
            return view('pages.dashboard.dashboard');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
