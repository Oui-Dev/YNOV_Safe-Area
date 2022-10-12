<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ManualSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public $title;
    public $body;
    public function __construct($email, $title, $body)
    {
        $this->email = $email;
        $this->body = $body;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info("Envoie d'un email Généré à :".$this->email);
        return $this->from($this->email, 'SafeArea')
            ->subject($this->title)
            ->markdown('emails.manualSendMail', [
                'body' => $this->body,
            ]);
    }
}
