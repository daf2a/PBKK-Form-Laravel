<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Formulir;

class FormulirController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'size' => 'required|numeric|between:2.50,99.99',
            'region' => 'required|string|max:255',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $formulir = new Formulir();
        $formulir->name = $request->input('name');
        $formulir->email = $request->input('email');
        $formulir->size = $request->input('size');
        $formulir->region = $request->input('region');

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('public/avatars');
            $formulir->avatar = str_replace('public/', '', $avatarPath);
        }

        $formulir->save();

        return redirect()->route('formulir.index')->with('success', 'Formulir berhasil disimpan.');
    }

    public function create()
    {
        return view('formulir');
    }
}
