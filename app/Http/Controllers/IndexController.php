<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'story' => 'required',
        ]);

        if ($request->anonymous) {
            $anonymous = 0;
        } else {
            $anonymous = 1;
        }


        $post = Story::create([
            'name' => $request->name,
            'story' => $request->story,
            'hug' => 0,
            'share' => 1,
            'anonymous' => $anonymous,
        ]);

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('index')->with(['success' => 'Cerita Anda Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('index')->with(['error' => 'Cerita Andas Gagal Disimpan!']);
        }
    }
}
