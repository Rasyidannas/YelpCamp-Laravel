<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camp;
use App\Models\User;
use App\Http\Requests\StoreCampRequest;

class CampsController extends Controller
{
    /**
     * Auhtentication for limit user
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //default with Eager Loading
        $query = Camp::latest()->with('comments');

        //for search form
        $search = $request->input('search');
        
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        $camps = $query->simplePaginate(6);

        return view('camps.index', compact('camps'));
        // return view('camps.index', ['camps' => Camp::latest()->with('comments')->simplePaginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('camps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCampRequest $request)
    {
        $validated = $request->validated();
        //add user_id
        $validated['user_id'] = $request->user()->id;

        $camp = Camp::create($validated);

        return redirect()->route('camps.show', ['camp' => $camp->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Camp $camp)
    {
        return view('camps.show', ['camp' => $camp]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camp $camp)
    {
        return view('camps.edit', ['camp' => $camp]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCampRequest $request, string $id)
    {
        $camp = Camp::findOrFail($id);
        $validated = $request->validated();
        $camp->update($validated);

        return redirect()->route('camps.show', ['camp' => $camp->slug]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $camp = Camp::findOrFail($id);
        $camp->delete();

        return redirect()->route('camps.index');
    }
}
