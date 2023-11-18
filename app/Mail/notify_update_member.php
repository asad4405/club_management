<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class notify_update_member extends Mailable
{
    use Queueable, SerializesModels;

    public $member_id;
    public $name;
    public $father_name;
    public $mother_name;
    public $phone_number;
    public $email;
    public $date_of_birth;
    public $present_address;
    public $permanent_address;
    public $id_no;
    public $nationality;
    public $religion;
    public $profession;
    public $blood_group;
    public $education;
    public $member_photo;

    public function __construct($member_id,$name,$father_name,$mother_name,$phone_number,$email,$date_of_birth,$present_address,$permanent_address,$id_no,$nationality,$religion,$profession,$blood_group,$education,$member_photo)
    {
        $this->member_id = $member_id;
        $this->name = $name;
        $this->father_name = $father_name;
        $this->mother_name = $mother_name;
        $this->phone_number = $phone_number;
        $this->email = $email;
        $this->date_of_birth = $date_of_birth;
        $this->present_address = $present_address;
        $this->permanent_address = $permanent_address;
        $this->id_no = $id_no;
        $this->nationality = $nationality;
        $this->religion = $religion;
        $this->profession = $profession;
        $this->blood_group = $blood_group;
        $this->education = $education;
        $this->member_photo = $member_photo;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to Young Star Club - Update',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'email.NotifyUpdateMember',
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
