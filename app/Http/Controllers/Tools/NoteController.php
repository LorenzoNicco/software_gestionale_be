<?php

namespace App\Http\Controllers\Tools;

//Collegamento controller principale
use App\Http\Controllers\Controller;

//Note
use App\Models\Tools\Note;
use App\Http\Requests\Tools\StoreNoteRequest;
use App\Http\Requests\Tools\UpdateNoteRequest;

//Helpers
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Ricavo l'id dell'utente loggato
        $loggedUserId = Auth::user()->id;

        //Prendo tutte le note nella tabella del DB relative all'utente loggato
        $allNotes = DB::table('notes')->where('user_id', $loggedUserId)->get();

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'notes' => $allNotes,
        ]);
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
    public function store(StoreNoteRequest $request)
    {
        $data = $request->validated();

        $newNote = Note::create($data);

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'notes' => $newNote,
        ]);
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
    public function update(UpdateNoteRequest $request, Note $note)
    {
        $data = $request->validated();

        $note->update($data);

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'notes' => $note,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'notes' => $note,
        ]);
    }
}
