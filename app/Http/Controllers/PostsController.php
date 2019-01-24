<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$posts = Post::All();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        $posts = Post::orderBy('created_at', 'asc')->paginate(5);

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //create new post
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate post
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('cover_image')) {
            //get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //just get ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //get file name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();
        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //find post
        $post = Post::find($id);

        //check if correct user
        if(auth()->user()->id != $post->user->id) {
            return redirect('/posts')->with('error', 'Unauthorised page');
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate post
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //update post
        $post = Post::find($id);

        //handle file upload
        if($request->hasFile('cover_image')) {

            if ($post->cover_image != 'noimage.jpg') {
                //delete image
                Storage::delete('public/cover_images/' . $post->cover_image);
            }

            //get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //just get ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //get file name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

            $post->cover_image = $fileNameToStore;

        } else {

            if ($post->cover_image != 'noimage.jpg') {
                //delete image
                Storage::delete('public/cover_images/' . $post->cover_image);
            }

            //if no image has been uploaded use default.
            $post->cover_image = 'noimage.jpg';
        }

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect()->action(
            'PostsController@show', ['id' => $id]
        )->with('success' , 'Post Updated');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);

        //check if correct user
        if(auth()->user()->id != $post->user->id) {
            return redirect('/posts')->with('error', 'Unauthorised page');
        }

        if ($post->cover_image != 'noimage.jpg') {
            //delete image
            Storage::delete('public/cover_images/' . $post->cover_image);
        }

        $post->delete();

        return redirect('/posts')->with('success', 'Post Removed');

    }
}
