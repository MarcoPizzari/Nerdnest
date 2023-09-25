<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class CareerRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $info;

    public function __construct($info)
    {
        $this->info = $info;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Richiesta di lavoro ricevuta',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.career-request-mail',
        );
    }
    
    public function attachments()
    {
        return [
             Attachment::fromPath(storage_path('app/public/asset/logo.png')), 
        ];
    }
}
