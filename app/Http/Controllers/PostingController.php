<?php

namespace App\Http\Controllers;


use App\Http\Requests\StorePostingRequest;
use App\Http\Requests\UpdatePostingRequest;
use App\Models\Category;
use App\Models\Posting;
use App\Models\User;

class PostingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feed', [
            "title" => "Beranda"
        ]);
    }
    public function chat()
    {
        return view('chat', [
            "title" => "Chatting"
        ]);
    }
    public function explore()
    {
        return view('explore', [
            "title" => "Jelajahi"
        ]);
    }

    public function pages()
    {
        return view('pages-terms');
    }
    public function profile()
    {
        return view('profile', [
            "title" => "Profile"
        ]);
    }
    public function setting()
    {
        return view('setting', [
            "title" => "Setting"
        ]);
    }
    public function trending()
    {
        return view('trending', [
            "title" => "Trending"
        ]);
    }
    public function coba()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        $posting = Posting::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString();
        return view('coba', [
            'judul' => "All Posts" . $title,
            // "post" => Posting::all()
            "posts" => $posting
        ]);
    }
    public function detail(Posting $post)
    {
        return view("coba2", [
            "judul" => "single post",
            "posting" => $post
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function show(Posting $posting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function edit(Posting $posting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostingRequest  $request
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostingRequest $request, Posting $posting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posting $posting)
    {
        //
    }
}
