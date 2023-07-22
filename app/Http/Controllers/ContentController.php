<?php

namespace App\Http\Controllers;

use App\Models\content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function create()
    {
        return view('upload.req');

    }

    public function welcome()
    {
        $contents = Content::all();
        return view('welcome', compact('contents'));
    }

    public function store(Request $request)
    {
    // Validate the uploaded file
    $validatedData = $request->validate([
        'image' => 'required|image',
    ]);

    // Get the original file name
    $originalFileName = $request->file('image')->getClientOriginalName();

    // Generate a unique file name
    $fileName = pathinfo($originalFileName, PATHINFO_FILENAME) . '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();

    // Store the uploaded file with the unique file name
    $imagePath = $request->file('image')->storeAs('public/content/images', $fileName);

    // Create a new content record
    $content = new Content();
    $content->image_path = $fileName;
    $content->save();

    return redirect('/');

    }



}
