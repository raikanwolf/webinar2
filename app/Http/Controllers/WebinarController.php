<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use Illuminate\Support\Facades\Mail;

class WebinarController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:participants',
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        $participant = Participant::create($request->all());

        // Enviar correo de confirmación
        Mail::to($participant->email)->send(new \App\Mail\WebinarRegistration($participant));

        return redirect()->route('register')->with('status', 'Registration successful!');
    }

    public function showTopics() {
        $participants = Participant::all();
        return view('webinar.topics', compact('participants'));
    }

}
