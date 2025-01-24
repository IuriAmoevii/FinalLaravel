<?php

namespace App\Console\Commands;

use App\Mail\ReminderEmail;
use App\Models\Event;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReminders extends Command
{
    protected $signature = 'reminders:send';
    protected $description = 'Send event reminders to users';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $events = Event::whereDate('date', now()->addDay()->toDateString())->get();

        foreach ($events as $event) {
            $user = $event->user; // Assuming each event is linked to a user
            Mail::to($user->email)->send(new ReminderEmail($user, $event));
        }

        $this->info('Reminders sent successfully!');
    }
}
