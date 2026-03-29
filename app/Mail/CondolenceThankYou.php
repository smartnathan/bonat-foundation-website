<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CondolenceThankYou extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public string $name) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank you for honouring the legacy of Mama Deborah I. Bonat',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.condolence-thank-you',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
