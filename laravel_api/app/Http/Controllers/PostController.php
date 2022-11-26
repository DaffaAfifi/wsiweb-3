<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostDetailResource;
use Auth;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        // api biasa
        // return response()->json(['data' => $posts]);

        // api resource
        return PostDetailResource::collection($posts->loadMissing('writer:id,username'));
    }

    public function show($id){
        $post = Post::with('writer:id,username')->findOrFail($id);

        // api biasa
        // return response()->json(['data' => $post]);

        // api resource
        return new PostDetailResource($post);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'news_content' => 'required'
        ]);

        $request['author'] = Auth::user()->id;
        $post = Post::create($request->all());
        return new PostDetailResource($post->loadMissing('writer:id,username'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required|max:255',
            'news_content' => 'required'
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());
        return new PostDetailResource($post->loadMissing('writer:id,username'));
    }

    public function destroy($id){
        $post = Post::findOrfail($id);
        $post->delete();

        return new PostDetailResource($post->loadMissing('writer:id,username'));
    }
}
