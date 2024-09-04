<?php


namespace App\Models;

// app/Mail/FeedbackMail.php

//namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

 

 
class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Обратная связь от ' . $this->data['name'])
                    ->view('emails.feedback');
    }
}


