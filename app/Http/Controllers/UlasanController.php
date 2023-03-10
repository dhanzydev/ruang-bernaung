<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    public function index()
    {
        $username = Auth::user()->username;
        return view('ulasan', compact('username'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'kritik' => 'required',
            'saran' => 'required',
        ]);

        $post = Ulasan::create([
            'name' => $request->name,
            'kritik' => $request->kritik,
            'saran' => $request->saran,
        ]);

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('ulasan')->with(['success' => 'Ulasan Berhasil Disimpa!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('ulasan')->with(['error' => 'Ulasan Gagal Disimpan!']);
        }
    }
}
