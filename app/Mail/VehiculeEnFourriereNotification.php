<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Plaque;

class VehiculeEnFourriereNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $plaque;

    /**
     * Create a new message instance.
     *
     * @param Plaque $plaque
     * @return void
     */
    public function __construct(Plaque $plaque)
    {
        $this->plaque = $plaque;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Véhicule en Fourrière - Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.vehicule_en_fourriere',  
            with: [
                'plaque' => $this->plaque,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
