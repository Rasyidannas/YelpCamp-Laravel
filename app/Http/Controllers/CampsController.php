<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camp;
use App\Http\Requests\StoreCampRequest;
use Illuminate\Support\Str;

class CampsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('camps.index', ['camps' => Camp::orderBy('created_at', 'desc')->take(5)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $camp = new Camp();
        $slug = Str::slug($camp->name);
        return view('camps.create');
        
        // compact() is same destructuring in JS ('camp => $camp, 'slug' => $slug)
        // return view('camps.create', compact('camp', 'slug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCampRequest $request)
    {
        $validated = $request->validated();

        $camp = Camp::create($validated);

        return redirect()->route('camps.show', ['camp' => $camp->id]);
        // return redirect()->route('camps.show', ['camp' => $camp->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('camps.show', ['camp' => Camp::findOrFail($id)]);
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
