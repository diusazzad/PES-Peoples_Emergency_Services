<?php

namespace App\Http\Controllers;

use App\Models\content;
use App\Models\Post;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function welcome()
    {
        $adminName = 'Admin User'; // Replace this with the actual admin's name
        return view('app', compact('adminName'));
    }

    // Store a new review
    public function store(Request $request)
    {
        // Validate the review content
        $request->validate([
            'content' => 'required|max:255',
        ]);

        // Create a new review
        $review = new Post();
        $review->user_id = auth()->user()->id;
        $review->content = $request->input('content');
        $review->save();

        return redirect()->route('welcome')->with('success', 'Review submitted successfully.');
    }

    // Edit a review (for administrators)
    public function edit(Post $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    // Update a review (for administrators)
    public function update(Request $request, Post $review)
    {
        // Validate the updated review content
        $request->validate([
            'content' => 'required|max:255',
        ]);

        // Update the review content
        $review->content = $request->input('content');
        $review->save();

        return redirect()->route('welcome')->with('success', 'Review updated successfully.');
    }

    // Delete a review (for administrators)
    public function destroy(Post $review)
    {
        $review->delete();

        return redirect()->route('welcome')->with('success', 'Review deleted successfully.');
    }


}
