<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function index()
    {
        // Get all files in storage/app/public/images
        $files = Storage::disk('public')->files('images');

        return view('image.index', ['files' => $files]);
    }
    // Show the upload form
    public function create()
    {
        return view('image.upload');
    }

    // Handle the uploaded image
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048', // max 2MB
        ]);

        $path = $request->file('image')->store('images', 'public');

        return redirect()->route('image.show', ['filename' => basename($path)])
            ->with('success', 'Image uploaded successfully!');
    }

    // Show the uploaded image
    public function show($filename)
    {
        return view('image.show', ['filename' => $filename]);
    }
}
