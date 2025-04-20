<?php

namespace App\Http\Controllers;

use App\Facades\Notification;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
 if($request->hasFile('image'))     {
   $data['image'] =  Storage::disk('public')->put('NotesImage', $request->file('image'));
 }   
$note = new Note();
        $note->title = $data['title'];
        $note->content = $data['content'];
        $note->image = $data['image'] ?? null;
        // $note->user_id = auth()->id();
        $note->save();
Notification::sendNotification('Note Created', auth::user());
        return redirect()->route('notes.index')->with('success', 'Note created successfully.');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
