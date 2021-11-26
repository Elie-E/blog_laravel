<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCat;
use DateTime;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::all();

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCat::all();
        return view('blog.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'key_post' => $request->key,
            'lng' => $request->lng,
            'title' => $request->title,
            'image'=> 'zizi',
            'content' => $request->body,
            'enabled' => 1,
            'published_at' => new DateTime(),            
        ]);

/**
 * Retrieve all values passed by checked checkbox(es) then filling the intermediate table
 * with the categories() function ( the relation ) and the sync method which accept an array of ID's
 * The categories's ID are passed via the value attribut on the html form (create.blade.php)
 */
        $categories = $request->input('categ_box');
        $newPost->categories()->sync($categories);

/**
 * If we want to retrieve intermediate table column(s) we use the pivot
 */
            // foreach($newPost->categories as $category){
            //     dump($category->pivot->post_id);       
            //     dump($category->pivot->cat_id);
            // }

        return redirect('blog/' . $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        return view('blog.show', [
            'post' => $blogPost,
            'categories' => $blogPost->categories()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        $categories = BlogCat::all();
        
        return view('blog.edit', [
            'post' => $blogPost,
            'categories' => $categories,

            'postCategories' => $blogPost->categories()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'key_post' => $request->key,
            'lng' => $request->lng,
            'title' => $request->title,
            'image'=> 'zizi',
            'content' => $request->body,
            'enabled' => 1,
            'date_modification' => new DateTime(),
        ]);

        $categories = $request->input('categ_box');
        $blogPost->categories()->sync($categories);

        return redirect ('blog/' . $blogPost->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect('/blog');
    }
}
