<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Models\Story;
use Mail;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function index()
    {
        $username = Auth::user()->username;
        return view('index', compact('username'));
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
            return redirect()->route('index')->with(['berhasil' => 'Cerita Anda Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('index')->with(['error' => 'Cerita Anda Gagal Disimpan!']);
        }
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'messages' => 'required'
        ]);
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'messages' => $request->input('messages'),
        );
        Mail::to('ruangbernaung@gmail.com')->send(new SendMail($data));
        return redirect()->route('index')->with(['success' => 'Terima Kasih Telah Menghubungi Kami']);
    }
}
