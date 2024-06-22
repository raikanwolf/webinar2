<?php
namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function show($id)
    {
        $participant = Participant::findOrFail($id);
        return view('curriculum.show', compact('participant'));
    }
}
