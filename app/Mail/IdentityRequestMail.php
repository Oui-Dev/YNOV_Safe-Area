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
    public $token;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\Complain $complain
     * @return void
     */
    public function __construct($complain, $token){
        $this->complain = $complain;
        $this->user = $complain->user;
        $this->token = $token;
    }

    /**
     * Build the message.s
     *
     * @return $this
     */
    public function build(){
        $url = request()->secure() ? 'https://' : 'http://' . "my." . config('app.domain') . "/complains/confirm/".$this->token;
        return $this->subject('Demande de levage d\'anonymat')
            ->markdown('emails.identityRequest')
            ->with([
                'complain' => $this->complain,
                'user' => $this->user,
                'url' => $url
            ]);
    }
}
