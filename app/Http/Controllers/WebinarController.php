<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use Illuminate\Support\Facades\Mail;

class WebinarController extends Controller
{
    public function showTopics()
    {
        $participants = Participant::with('tasks')->get();
        return view('webinar.topics', compact('participants'));
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validar y registrar el participante
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:participants',
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        Participant::create($validated);

        return redirect()->route('topics');
    }
}