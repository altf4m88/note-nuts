<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public static function dashboardIndex()
    {
        $userId = Auth::user()->id;

        $latestNotes = Note::orderBy('updated_at', 'desc')->where('user_id', $userId)->limit(2)->get();

        return $latestNotes;
    }

    public static function index()
    {
        $userId = Auth::user()->id;

        $user = User::find($userId);
        $user->notes = $user->notes ?? [];

        return $user;
    }

    public static function detail($id)
    {
        $note = Note::find($id);

        return $note;
    }

    public function create(Request $request)
    {
        $note = new Note;
        $userId = Auth::user()->id;

        $tags = explode(",", $request->tags);

        $note->title = $request->title;
        $note->note = $request->note;
        $note->tags = $tags;
        $note->user_id = $userId;

        $note->save();
        return redirect('notes');
    }

    public function update(Request $request)
    {
        $note = Note::find($request->id);

        $tags = explode(",", $request->tags);


        $note->title = $request->title;
        $note->note = $request->note;
        $note->tags = $tags;

        $note->save();

        return redirect($request->id.'/detail');
    }

    public function delete(Request $request)
    {
        Note::find($request->id)->delete();

        return redirect()->back();
    }
}
