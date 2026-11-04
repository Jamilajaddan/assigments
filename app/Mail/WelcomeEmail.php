<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Mail\Mailables\Content;

use Illuminate\Mail\Mailables\Envelope;

use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable

{

    use Queueable, SerializesModels;

    public string $userName;

    public function __construct(string $userName)

    {

        $this->userName = $userName;

    }

    // Set the email Subject line

    public function envelope(): Envelope

    {

        return new Envelope(

            subject: 'Welcome to Our Platform!',

        );

    }

    // Point to the Blade template for the email body

    public function content(): Content

    {

        return new Content(

            view: 'emails.welcome',

        );

    }

}
