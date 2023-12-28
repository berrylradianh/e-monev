<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KuisionerController extends Controller
{
    //
    public function index()
    {
        try {
            $questions = Question::all();

            $user_id = Auth::id();

            $userHasFilledKuisioner = Answer::where('user_id', $user_id)->exists();

            $userAnswers = [];
            if ($userHasFilledKuisioner) {
                $userAnswers = Answer::where('user_id', $user_id)->first()->toArray();
                unset($userAnswers['id'], $userAnswers['user_id'], $userAnswers['created_at'], $userAnswers['updated_at']);
            }

            return view('pages.dashboard.kuisioner', compact('questions', 'userHasFilledKuisioner', 'userAnswers'));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'question_id.*' => 'required',
                'pertanyaan.*' => 'required',
            ]);

            $answer = new Answer(['user_id' => Auth::user()->id]);

            for ($i = 1; $i <= 15; $i++) {
                $answer->setAttribute("pertanyaan$i", $request->input("pertanyaan$i"));
            }

            $answer->save();
            return redirect()->intended('/kuisioner');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
