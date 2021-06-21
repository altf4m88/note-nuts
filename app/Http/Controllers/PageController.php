<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard(Request $request)
    {
        $data = NoteController::dashboardIndex();
        $user = Auth::user();

        return view('dashboard')
        ->with('data', $data)
        ->with('user', $user);
    }

    public function notes()
    {
        $user = NoteController::index();

        return view('note')
        ->with('user', $user);
    }

    public function detailNote($id)
    {
        $user = Auth::user();
        $user->note = NoteController::detail($id);

        return view('detail_note')
        ->with('user', $user);
    }

    public function createNote()
    {
        return view('create_note');
    }

    public function updateNote($id)
    {
        $user = Auth::user();
        $user->note = NoteController::detail($id);
        $user->note->modified_tags = implode(',', $user->note->tags);

        return view('update_note')
        ->with('user', $user);
    }
}
