<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notes = Note::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get();
        return view('note.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated_data = $request->validate([
            'title' => 'required|string',
            'description' => 'required',
        ]);

        Note::create([
            'user_id' => Auth::id(),
            'title' => $validated_data['title'],
            'description' => $validated_data['description'],
        ]);

        return redirect()->route('notes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $note = Note::findorFail($id);
        return view('note.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
        return view('note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //

        if ($note->user_id != Auth::id()) {
            abort(403);
        }

        $validated_data = $request->validate([
            'title' => 'required|string',
            'description' => 'required',
        ]);

        $note->update($validated_data);

        return redirect()->route('notes.index')->with('success','Note has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        if ($note->user_id != Auth::id()) {
            abort(403);
        }

        $note->delete();
        return back()->with('success','Note has been deleted!');
    }
}
