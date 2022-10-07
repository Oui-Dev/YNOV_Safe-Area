<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\Role;

class MakeNewRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmd-role:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a new role with command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $roleName = $this->ask('Nom du nouveau rôle');
            $isSystem = $this->anticipate('Est-ce un rôle système ? [y/n]', ['y', 'n']);

            if($isSystem == 'y') {$isSystem = now();} else {$isSystem = null;}

            $role = Role::create([
                'label'=>$roleName,
                'is_system'=>$isSystem,
            ]);
            Log::info("Création d'un nouveau rôle ID: ".$role->id);
        } catch (\Exception $ex) {
            Log::critical("Une erreur est survenue sur la commande cmd-role:new = ".$ex);

            $this->error("Une erreur est survenue lors de l'éxécution de la commande");
            return $this->line($ex);
        }

        return  $this->info('Création du rôle effectuée');
    }
}
