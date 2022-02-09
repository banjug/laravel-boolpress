<?php
namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('pages.posts', compact('posts'));
    }
    public function createPost() {
        $categories=Category::all();
        $tags=Tag::all();
        return view('pages.post-create', compact('categories', 'tags'));
    }
    public function storePost(Request $request) {
        $data = $request->validate([
            "title"=>"required|string|min:3",
            "text"=>"required|string",
        ]);
        $post = Post::make($data);

        $category = Category::findOrFail($request->get('category'));
        $post->category()->associate($category);
        $post->save();

        $tags = Tag::findOrFail($request->get('tags'));
        $post->tags()->attach($tags);
        $post->save();

        return redirect()->route('posts');
    }
    public function editPost($id) {
        $categories=Category::all();
        $tags=Tag::all();
        $post=Post::findOrFail($id);
        
        return view('pages.post-edit', compact('categories', 'tags', 'post'));
    }
}
