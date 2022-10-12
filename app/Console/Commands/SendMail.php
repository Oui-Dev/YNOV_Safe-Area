<?php

namespace App\Console\Commands;

use App\Mail\ManualSend;
use App\Models\Company;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmd-email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email with command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $email = $this->ask("Adresse email de destination");
            $title = $this->ask("Titre du message");
            $body = $this->ask("Corps du message");

            Mail::to($email)->queue(new ManualSend($email, $title, $body));

            Log::info("Envoie d'un email manuel à : ".$email);
        } catch (\Exception $ex) {
            Log::critical("Une erreur est survenue sur la commande cmd-email:send = ".$ex);

            $this->error("Une erreur est survenue lors de l'éxécution de la commande");
            return $this->line($ex);
        }

        return  $this->info("Envoie de l'email effectué");
    }
}
