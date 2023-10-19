<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();

        return view('pages.gallery', compact('galleries'));
    }
    public function create()
    {
        return view('pages.admin.gallery.create');
    }
    public function edit($id)
    {
        return view('pages.admin.gallery.edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'image' => 'nullable|image',
            'uploader_id' => 'nullable|integer',
            'uploaded_at' => 'nullable|date',
            'status' => 'nullable|integer',
        ]);

        $gallery = Gallery::create($request->all());

        return redirect()->route('pages.admin.gallery.index');
    }
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('pages.admin.gallery.show', compact('gallery'));
    }
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('pages.admin.gallery.index');
    }

}
