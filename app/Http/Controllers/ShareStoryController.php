<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class ShareStoryController extends Controller
{
    public function index()
    {
        $data = Story::all()->where('share', 0);
        return view('kts', compact('data'));
    }

    public function react(Story $story, $id)
    {
        $story->react($id);

        return redirect()->route('kts');
    }
}
