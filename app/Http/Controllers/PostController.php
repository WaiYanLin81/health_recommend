<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::all();
        return view('backend.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            
            "title" => 'required',
            
            "photo" => 'required',

            "description" => 'required',
            
            
         ]);
           $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/postsimg'),$imageName);

        $path = 'backend/postsimg/'.$imageName;


        $post = new Post;
        $post->title = $request->title;
        $post->photo = $path;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('backend.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            
            "title" => 'required',
            
            "photo" => 'sometimes',

            "oldphoto" => 'required',

            "description" => 'required',
            
            
         ]);

          if($request->hasFile('photo')){

                $imageName = time().'.'.$request->photo->extension();

                $request->photo->move(public_path('backend/postsimgs'),$imageName);

                $path = 'backend/postsimgs/'.$imageName;


          }else{

            $path=$request->oldphoto;

          }

          $post->title = $request->title;
        $post->photo = $path;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts.index');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
