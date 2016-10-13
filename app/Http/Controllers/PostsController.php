<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // this will be the first method that runs when the class is called
    public function index()
    {

        $data ['posts'] = Post::paginate(4);

        // this is the same as foreach ($posts->attributes as $post) {}
        // foreach($posts as $post) {
        //     echo $post->title;
        //     echo $post->url;
        //     echo $post->content;
        // }
        return view ('posts.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rules = [
            'title'   => 'required|min:5',
            'url'     => 'required',
            'content' => 'required',
        ];
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
    {
        // associative array whose keys are input names in the request
        // values are the validation rules
        $rules = [
            'title'   => 'required|min:5',
            'url'     => 'required',
            'content' => 'required',
        ];
        // will redirect back with $errors object populated if validation fails
        $this->validate($request, $rules);
        $post = new Post();
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = User::first()->id;
        $post->save();
        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $data['post']= $post;
        // dd($post);
        return view ('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // needs to return the view page that it is connected to
    public function edit($id)
    {
        $post = Post::find($id);
        $data = ['post' => $post];
        return view('posts.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // returns the
    public function update(Request $request, $id)
    {
      $rules = [
          'title'   => 'required|min:5',
          'url'     => 'required',
          'content' => 'required',
      ];

        $post = Post::find($id);
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();
        return redirec()->action('PostController@show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'destroy() method - Delete a specific post';
    }
}
