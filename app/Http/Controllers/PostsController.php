<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $data['posts']=Posts::with('Category')->paginate(10);
        return view('backend.post.posts',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[];
        $data['categories']=Category::all();
        return view('backend.post.addPost',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|min:4',
            'description' => 'required|min:4',
            'category' => 'required|integer',
            'ststus' => 'required|boolean',
        ]);

        $post = new Posts();
        $post->users_id=Auth::id();
        $post->categories_id=$request->category;
        $post->title=$request->title;
        $post->desc=$request->description;
        $post->photo="testing";
        $post->status=$request->ststus;
        $post->save();
        $request->session()->flash('success', 'Posts add Successfuly');
        return redirect()->route('post')->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        $data=[];
        $data['post']=Posts::find($posts->id);
        $data['categories']=Category::all();
        return view('backend.post.editpost',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        $validated = $request->validate([
            'title' => 'required|min:4',
            'description' => 'required|min:4',
            'category' => 'required|integer',
            'ststus' => 'required|boolean',
        ]);

        $post = Posts::find($posts->id);
        $post->users_id=Auth::id();
        $post->categories_id=$request->category;
        $post->title=$request->title;
        $post->desc=$request->description;
        $post->photo="testing";
        $post->status=$request->ststus;
        $post->save();
        $request->session()->flash('success', 'Posts Update Successfuly');
        return redirect()->route('post')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
