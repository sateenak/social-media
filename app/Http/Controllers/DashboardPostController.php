<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.post.index', [
            'posting' => Posting::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.post.create', [
            'categories' => Category::all()
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:postings',
            'image' => 'image|file|max:2000',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        Posting::create($validatedData);
        return redirect('/dashboard/posting')->with('success', 'New Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */

    public function show(Posting $posting)
    {
        return view('dashboard.post.show', [
            'post' => $posting,
            'judul' => 'Post saya'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function edit(Posting $posting)
    {
        return view('dashboard.post.edit', [
            'post' => $posting,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posting $posting)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:2000',
            'body' => 'required'
        ];
        if ($request->slug != $posting->slug) {
            $rules['slug'] = 'required|unique:postings';
        }

        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-image');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        Posting::where('id', $posting->id)->update($validatedData);
        return redirect('/dashboard/posting')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posting $posting)
    {
        if ($posting->image) {
            Storage::delete($posting->image);
        }
        Posting::destroy($posting->id);
        return redirect('/dashboard/posting')->with('success', 'Post has been delated!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Posting::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
