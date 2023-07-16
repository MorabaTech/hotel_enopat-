<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public string $name ;
    public string $email;

    public $subject;
    public string $body;

    public function __construct($name , $email ,  $subject , $body)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function build()
    {
        return $this->subject('New Contact on Website')
            ->view('emails.contact');
    }
}
