<?php

namespace App\Jobs;

use App\Models\User;
use App\Mail\SendServiceMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\Task; 

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function handle()
    {
        // Retrieve the user by ID
        $user = User::find($this->userId);

        // Get the pending tasks for the user
        $tasks = Task::where('assigned_to', $this->userId)
                     ->where('status', 'pending')
                     ->get();

        // Send the email
        Mail::to($user->email)->send(new SendServiceMail($user, $tasks));
    }
}
