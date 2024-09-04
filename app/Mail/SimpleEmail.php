<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SimpleEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $message;

    public function __construct($subject, $message)
    {
        $this->subject = $subject;
        $this->message = $message;
    }
 public function build()
    {
        return $this->html('<html><body><h1>' . htmlspecialchars($this->subject, ENT_QUOTES, 'UTF-8') . '</h1><p>' . nl2br(htmlspecialchars($this->message, ENT_QUOTES, 'UTF-8')) . '</p></body></html>')
                    ->subject($this->subject);
    }
}
