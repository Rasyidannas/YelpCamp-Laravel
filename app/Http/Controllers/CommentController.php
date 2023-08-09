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
        $this->middleware('auth')->except('show');
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
