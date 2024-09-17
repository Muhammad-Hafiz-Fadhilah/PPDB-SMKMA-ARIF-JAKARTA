<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailKonfirmasi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email Konfirmasi',
        );
    }

   
    public function build()
    {
       return $this->from('pengirim@malasngoding.com')
                   ->view('kirimemail')
                   ->with(
                    [
                        'nama' => 'Diki Alfarabi Hadi',
                        'website' => 'www.malasngoding.com',
                    ]);
    }

}
