<?php

namespace App\Http\Controllers\Landingpage;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::query();

        if ($request->category) {
            $category = Category::where('name', $request->category)->first();
            $posts->where('category_id', $category->id);
        }

        if ($request->author) {
            $user = User::where('name', $request->author)->first();
            $posts->where('user_id', $user->id);
        }

        $posts = $posts->paginate(6);

        return view('landingpage.blog',[
            'title' => 'Blogs',
        ], compact('posts'));
    }

    public function show(Post $post)
    {
        return view('landingpage.blog-detail',[
            'title' => 'Article',
        ], compact('post'));
    }
}
