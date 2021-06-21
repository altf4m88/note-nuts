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

    public function createNote()
    {
        return view('create_note');
    }

    public function updateNote()
    {
        return view('update_note');
    }
}
