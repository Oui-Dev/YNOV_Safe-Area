<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\Company;
use Ramsey\Uuid\Uuid;

class MakeNewCompany extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmd-company:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a new company with command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $name = $this->ask('Nom de la nouvelle société');
            $adress = $this->ask("Adresse de la société");
            $siren = $this->ask("Siren de la société");
            $siret = $this->ask("Siret de la société");
            $phone = $this->ask("Numéro de téléphone de la société");
            $email = $this->ask("Adresse email de la société");

            $adresse_code = app('App\Http\Controllers\Controller')->searchAdresse($adress);
            $company = Company::create([
                'reference'=>Uuid::uuid4(),
                'name'=>$name,
                'address_id'=>$adresse_code['adresse'],
                'city_id'=>$adresse_code['ville_id'],
                'siren'=>$siren,
                'siret'=>$siret,
                'phone'=>$phone,
                'email'=>$email,
            ]);
            Log::info("Création d'une nouvelle société ID: ".$company->id);
        } catch (\Exception $ex) {
            Log::critical("Une erreur est survenue sur la commande cmd-company:new = ".$ex);

            $this->error("Une erreur est survenue lors de l'éxécution de la commande");
            return $this->line($ex);
        }

        return  $this->info('Création de la société effectuée');
    }
}
