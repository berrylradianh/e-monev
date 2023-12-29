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
            dd($request->all());
            $requestData = $request->all();

            foreach ($requestData['pelaporan'] as $item) {
                $pelaporan = Pelaporan::find($item['id']);

                if ($pelaporan) {
                    $pelaporan->form1 = isset($item['form1']) ? true : false;
                    $pelaporan->form2 = isset($item['form2']) ? true : false;
                    $pelaporan->form3 = isset($item['form3']) ? true : false;

                    $pelaporan->save();
                }
            }

            return response()->json(['message' => 'Data updated successfully']);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
