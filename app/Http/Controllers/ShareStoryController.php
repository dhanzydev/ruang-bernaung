<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Facades\Auth;

class ShareStoryController extends Controller
{
    public function index()
    {
        $username = Auth::user()->username;
        $data = Story::all()->where('share', 0);
        return view('kts', compact('data', 'username'));
    }

    public function react(Story $story, $id)
    {
        $story->react($id);

        return redirect()->route('kts');
    }
}
