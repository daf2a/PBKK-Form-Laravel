<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Formulir;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class FormulirController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'size' => 'required|numeric|between:2.50,99.99',
            'region' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $formulir = new Formulir();
        $formulir->name = $request->input('name');
        $formulir->brand = $request->input('brand');
        $formulir->size = $request->input('size');
        $formulir->region = $request->input('region');

        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/pictures');
            $formulir->picture = str_replace('public/', '', $picturePath);
        }

        $formulir->save();

        return redirect()->route('dashboard.response')->with('status', 'Data berhasil ditambahkan!');
    }

    public function create()
    {
        return view('dashboard.formulir', [
            'page' => 'formulir'
        ]
    );
    }

    public function show() : View
    {
        $time_start = microtime(true);
        // $formulirs = Formulir::all();
        $formulirs = Formulir::paginate(20);
        for ($i = 0; $i < 100; $i++) {
            if (Cache::has('formulir')) {
                $formulirs = Cache::get('formulir');
            } else {
                $formulirs = Formulir::all();
                Cache::put('random', $formulirs, 60);
            }
        }
        $time_end = microtime(true);
        // dd($time_end - $time_start);

        return view('dashboard.response', [
            'formulirs' => $formulirs,
            'page' => 'dashboard.response'
        ]);
    }
}
