<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index(User $user)
    {
        // dd($user);
        return view('dashboard', compact('user'));
    }

    public function create()
    {
        // dd(auth()->user()->id);
        if(!isset(auth()->user()->id)){
            return redirect()->route('login');
        }
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd(auth()->user()->id);
        $request->validate([
           'titulo' => 'required|max:255' ,
           'descripcion' => 'required',
           'imagen' => 'required',
        ]);

        Post::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('posts.index', auth()->user()->username);
    }
}


