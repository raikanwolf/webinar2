<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Participant;
use Illuminate\Support\Facades\Mail;
use App\Mail\WebinarReminder;

class SendWebinarReminder extends Command
{
    protected $signature = 'send:webinar-reminder';
    protected $description = 'Send webinar reminders to participants';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $participants = Participant::all();
        foreach ($participants as $participant) {
            Mail::to($participant->email)->send(new WebinarReminder($participant));
        }
    }
}
