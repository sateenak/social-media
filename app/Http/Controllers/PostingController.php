<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use App\Http\Requests\StorePostingRequest;
use App\Http\Requests\UpdatePostingRequest;

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
    public function login()
    {
        return view('form-login', [
            "title" => "Menu-Login"
        ]);
    }
    public function registrasi()
    {
        return view('form-register', [
            "title" => "Menu-Register"
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

        return view('coba', [
            'judul' => "blog",
            "post" => Posting::all()
        ]);
    }
    public function detail($slug)
    {
        return view("coba2", [
            "judul" => "single post",
            "postingan" => Posting::find($slug)
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
