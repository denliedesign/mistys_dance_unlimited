<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function Psr\Log\alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $blogs;

    public function __construct()
    {
        $this->blogs = Blog::all();
        \View::share('blogs', $this->blogs);
    }

    public function index(Blog $blog)
    {
        $blogs = Blog::orderByDesc('blog_date')->paginate(12);
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('update', Blog::class);
        $blog = new Blog();
        return view('blogs.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $blog = Blog::create($this->validateRequest());
        $this->storeImage($blog);
        return redirect('blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($slug)
    {
        // Fetch the blog by slug
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Get the 4 most recent blogs, excluding the current one
        $recentBlogs = Blog::where('slug', '!=', $slug)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('blogs.show', compact('blog', 'recentBlogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $this->authorize('update', Blog::class);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->authorize('update', Blog::class);
        $blog->update($this->validateRequest());
        $this->storeImage($blog);
        return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/blogs');
    }

    private function validateRequest()
    {
        return request()->validate([
            'seo_title' => 'required|min:3',
            'seo_description' => 'required|min:3',
            'seo_image_name' => 'nullable|string',
            'blog_title' => 'required|min:3',
            'blog_content' => 'required',
            'blog_image' => 'sometimes|file|image|max:5000',
            'blog_date' => 'required',
        ]);
    }

    private function storeImage($blog)
    {
        if (request()->hasFile('blog_image')) {
            // Retrieve the uploaded file
            $image = request()->file('blog_image');

            // Generate a custom filename, if provided, or use a unique ID
            $imageName = request('seo_image_name') ? request('seo_image_name') : Str::random(40);

            // Ensure the custom name includes the original extension
            $imageNameWithExtension = $imageName . '.' . $image->getClientOriginalExtension();

            // Store the image with the custom or generated name
            $path = $image->storeAs('uploads', $imageNameWithExtension, 'public');

            // Update the blog record with the path to the stored image
            $blog->update(['blog_image' => $path]);
        }
    }
}
