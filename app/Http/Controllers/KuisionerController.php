<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Exception;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    //
    public function index()
    {
        try {
            $questions = Question::all();
            return view('pages.dashboard.kuisioner', compact('questions'));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
