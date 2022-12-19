<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Story;

class DashboardController extends Controller
{
    public function index()
    {
        $username = Auth::user()->username;
        return view('dashboard', compact('username'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'story' => 'required',
        ]);

        if ($request->anonymous) {
            $anonymous = 0; //true
        } else {
            $anonymous = 1; //false
        }

        if ($request->share) {
            $share = 0;
        } else {
            $share = 1;
        }

        $post = Story::create([
            'name' => $request->name,
            'story' => $request->story,
            'hug' => 0,
            'share' => $share,
            'anonymous' => $anonymous,
        ]);

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('dashboard')->with(['success' => 'Cerita Anda Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('dashboard')->with(['error' => 'Cerita Anda Gagal Disimpan!']);
        }
    }
}
