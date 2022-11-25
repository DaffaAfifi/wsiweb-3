<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostDetailResource;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        // api biasa
        // return response()->json(['data' => $posts]);

        // api resource
        return PostResource::collection($posts);
    }

    public function show($id){
        $post = Post::with('writer:id,username')->findOrFail($id);

        // api biasa
        // return response()->json(['data' => $post]);

        // api resource
        return new PostDetailResource($post);
    }
}
