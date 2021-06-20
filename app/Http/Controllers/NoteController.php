<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::user()->id;

        $user = User::find($userId);
        $user->notes();

        return $user;
    }

    public function create(Request $request)
    {
        $note = new Note;

        $note->title = $request->title;
        $note->note = $request->note;
        $note->tags = $request->tags;
        $note->user_id = $request->user_id;

        $note->save();
    }

    public function update(Request $request)
    {
        $note = Note::find($request->id);

        $note->title = $request->title;
        $note->note = $request->note;
        $note->tags = $request->tags;

        $note->save();
    }

    public function delete(Request $request)
    {
        Note::find($request->id)->delete();

        return 'Ok';
    }
}
