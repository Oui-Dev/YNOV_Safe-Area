<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\Version;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MakeNewVersion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmd-version:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make new version with command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $name = $this->ask("Nom de la nouvelle version d'application");
            $generation = $this->ask("Numéro de generation de la version d'application");
            $revision = $this->ask("Numéro de révision de la version d'application");
            $correction = $this->ask("Numéro de correction de la version d'application");
            $changelog = $this->ask("Changelog de la version d'application");

            Version::where('archived_at',null)->update(['archived_at'=>now()]);
            $version = Version::create([
                'name'=>$name,
                'generation'=>$generation,
                'revision'=>$revision,
                'correction'=>$correction,
                'changelog'=>$changelog,
            ]);
            Log::info("Création d'une nouvelle version d'application ID: ".$version->id);
        } catch (\Exception $ex) {
            Log::critical("Une erreur est survenue sur la commande cmd-version:new = ".$ex);

            $this->error("Une erreur est survenue lors de l'éxécution de la commande");
            return $this->line($ex);
        }

        return  $this->info('Création de la version effectuée et activée');
    }
}
