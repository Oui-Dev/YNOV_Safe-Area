<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IdentityRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $complain;
    public $user;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\Complain $complain
     * @return void
     */
    public function __construct($complain){
        $this->complain = $complain;
        $this->user = $complain->user;
    }

    /**
     * Build the message.s
     *
     * @return $this
     */
    public function build(){
        return $this->subject('Demande de levage d\'anonymat')
            ->view('emails.identityRequest')
            ->with([
                'complain' => $this->complain,
                'user' => $this->user,
            ]);
    }
}
