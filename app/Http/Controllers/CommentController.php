<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreComment;
use App\Models\Camp;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComment $request, Camp $camp)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $validated['camp_id'] = $camp->id;

        $comment = Comment::create($validated);


        return redirect()->route('camps.show', $camp);
        
        // return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComment $request, Camp $camp, string $id)
    {
        $comment = Comment::findOrFail($id);
        $validated = $request->validated();
        $comment->update($validated);
        return redirect()->route('camps.show', $camp);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camp $camp, Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return redirect()->route('camps.show', $camp);
    }
}
