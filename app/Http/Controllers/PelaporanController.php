<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Exception;
use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    public function index()
    {
        try {
            $pelaporan = Pelaporan::all();
            return view('pages.dashboard.pelaporan', compact('pelaporan'));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function update(Request $request)
    {
        try {
            $requestData = $request->except('_token');

            foreach ($requestData as $key => $values) {
                foreach ($values as $index => $value) {
                    if ($value === 'on') {
                        $dataToSave = [
                            $key => true,
                        ];

                        Pelaporan::updateOrInsert(['no_rm' => $request->no_rm[$index]], $dataToSave);
                    }
                }
            }

            return redirect()->intended('/pelaporan');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


    public function store(Request $request)
    {
        try {
            // dd($request->all());
            $this->validate($request, [
                'no_rm' => 'required',
            ]);

            $pelaporan = Pelaporan::create([
                'no_rm' => $request->input('no_rm'),
                'form1' => $request->input('form1') == 'on' ? true : false,
                'form2' => $request->input('form2') == 'on' ? true : false,
                'form3' => $request->input('form3') == 'on' ? true : false,
            ]);

            if ($pelaporan) {
                return redirect()->intended('/pelaporan');
            }
            return back();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
