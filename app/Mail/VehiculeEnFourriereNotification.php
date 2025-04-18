<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
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
        // Récupérer les variables d'environnement ou utiliser des valeurs par défaut
        $fromAddress = env('MAIL_FROM_ADDRESS', 'admin@alerte-fourriere.com'); // Adresse par défaut si vide
        $fromAddress = 'admin@alerte-fourriere.com'; // Adresse par défaut si vide
        $fromName = env('MAIL_FROM_NAME', 'SocialV'); // Nom par défaut si vide

        // Debugging output - Pour vérifier que les valeurs sont bien récupérées
        // dd($fromAddress, $fromName);

        return new Envelope(
            from: new Address($fromAddress, $fromName),
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
