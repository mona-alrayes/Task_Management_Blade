<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendServiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $tasks; 
    public $user;  

    public function __construct($user, $tasks)
    {
        $this->user = $user; // Store user info
        $this->tasks = $tasks; // Store tasks
    }

    public function build(){
        return $this->subject('المهام المعلقة الخاصة بك')
        ->view('emails.PendingTasks');
    }
}