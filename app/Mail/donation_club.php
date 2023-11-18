<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class donation_club extends Mailable
{
    use Queueable, SerializesModels;

    public $donation_id;
    public $name;
    public $donation_reason;
    public $donation_amount;
    public $address;
    public $email;
    public $club_member;

    public function __construct($donation_id,$name,$donation_reason,$donation_amount,$address,$email,$club_member)
    {
        $this->donation_id = $donation_id;
        $this->name = $name;
        $this->donation_reason = $donation_reason;
        $this->donation_amount = $donation_amount;
        $this->address = $address;
        $this->email = $email;
        $this->club_member = $club_member;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Donation with Young Club',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'email.NotifyDonation',
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
