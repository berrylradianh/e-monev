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
            return view('layouts.dashboard.master');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
