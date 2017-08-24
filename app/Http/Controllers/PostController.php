<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Auth;
use Illuminate\Http\Request;
use App\Http\Request\PostFormRequest;
use Carbon\Carbon;
use Session;
class PostController extends Controller
{
    /*
     * Fixauthentication of the resource.
 */
public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//get all posts
        $posts=Post::latest()
        ->filter(request(['month','year']))
        ->paginate(6);

        $archives=Post::archives();

        Return view('posts.index')->withPosts($posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // add value for tags
        $tags=Tag::all();

        Return view('posts.create')->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        // validate request
        $this->validate(request(),[
            'title'=>'required|min:5|max:40',
            'body'=>'required|min:5|max:200'
            ]);
        $slug=Auth::user()->name.hash('ripemd160', carbon::now());



        $post = new Post;
        $post->user_id = auth()->id();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug =$slug;
        $post->save();

        $post->tags()->sync($request->tags,false);

            return  redirect()->route('PostList');
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

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // find the post in the database and save as a var
        $post = Post::find($id);

        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }
        // return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post)->withTags($tags2);
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
        //
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
