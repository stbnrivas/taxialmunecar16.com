<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Address;
use App\Models\Booking;

class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public Booking $booking, )
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('reply@taxialmunecar16.com', 'Taxi Almuñecar 16'),
            subject: 'Your booking needs confirmation'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email-booking-confirmation',
            with: [
                'lang' => $this->booking->lang, # into view use `{{ $lang }}`
                'type' => $this->booking->type, # into view use `{{ $type }}`
                'airport' => $this->booking->airport,
                'port' => $this->booking->port,
                'date' => $this->booking->date,
                'time' => $this->booking->time,
                'origin' => $this->booking->origin,
                'destination' => $this->booking->destination,
                'name' => $this->booking->name,
                'email' => $this->booking->email,
                'phone' => $this->booking->phone,
                'email_confirmation_code' => $this->booking->email_confirmation_code,
                'deletion_code' => $this->booking->deletion_code,
            ]
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
