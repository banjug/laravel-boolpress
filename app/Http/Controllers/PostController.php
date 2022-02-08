<?php
namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts() {
        $posts = Post::all();
        return view('pages.posts', compact('posts'));
    }
    public function create() {
        return view('pages.post-create');
    }
}
