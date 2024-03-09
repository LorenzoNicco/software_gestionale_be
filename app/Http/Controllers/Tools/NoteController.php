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

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allNotes = DB::table('notes')->get();

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'notes' => $allNotes
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
        //
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