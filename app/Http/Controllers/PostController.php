<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $posts;

    public function __construct()
    {
        $this->posts = Post::all();
        \View::share('posts', $this->posts);
    }

    public function index(Post $post)
    {
        $posts = Post::orderByDesc('shown')->paginate(6);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Post::class);
        $post = new Post();
        return view('posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $post = Post::create($this->validateRequest());
        $this->storeImage($post);
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        // Fetch all posts except the current one to avoid duplicating it in the list
        $posts = Post::where('id', '!=', $post->id)
            ->latest()
            ->take(2)
            ->get();;

        // Pass both the current post and all other posts to the view
        return view('posts.show', compact('post', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update', Post::class);
        return view('posts.edit', compact('post'));
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
        $this->authorize('update', Post::class);
        $post->update($this->validateRequest());
        $this->storeImage($post);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }

    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'content' => 'required',
            'shown' => 'required',
            'image' => 'sometimes|file|image|max:5000',
            'image_name' => 'nullable|string',
        ]);
    }

    private function storeImage($post)
    {
        if (request()->hasFile('image')) {
            // Retrieve the uploaded file
            $image = request()->file('image');

            // Generate a custom filename, if provided, or use a unique ID
            $imageName = request('image_name') ? request('image_name') : Str::random(40);

            // Ensure the custom name includes the original extension
            $imageNameWithExtension = $imageName . '.' . $image->getClientOriginalExtension();

            // Store the image with the custom or generated name
            $path = $image->storeAs('uploads', $imageNameWithExtension, 'public');

            // Update the post record with the path to the stored image
            $post->update(['image' => $path]);
        }
    }

    public function export()
    {
        return Excel::download(new PostsExport, 'posts.xlsx');
    }
}
