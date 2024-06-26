<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //dump and die
        //dd($posts);


        return view('pages.index', compact('posts'));
    }
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|string|max:200',
            'description' => 'required|string',
            'status' => 'nullable|sometimes'
        ]);
        // dd($validatedData);
        Post::query()->create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'status' => $request->status == true ? 1 : 0
        ]);

        return redirect('/posts');

        
    }
    


}
