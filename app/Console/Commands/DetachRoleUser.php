<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DetachRoleUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmd-role:detach';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Detach role to user with command';

    /**
     * Execute the console command
     *
     * @return int
     */
    public function handle()
    {
        try {
            $userId = $this->ask("ID de l'utilisateur");
            $roleId = $this->ask("ID du rôle");

            if(!User::find($userId)) {
                Log::info("cmd-role:attach{'.$userId.','.$roleId.'} Utilisateur inexistant");
                return  $this->error('Utilisateur inexistant');
            }
            if(!Role::find($roleId)) {
                Log::info("cmd-role:detach{'.$userId.','.$roleId.'} Rôle inexistant");
                return  $this->error('Rôle inexistant');
            }
            User::find($userId)->roles()->detach($roleId);

            Log::info("Suppression du rôle ID: ".$roleId." à l'utilisateur ID ".$userId);
        } catch (\Exception $ex) {
            Log::critical("Une erreur est survenue sur la commande cmd-role:detach = ".$ex);

            $this->error("Une erreur est survenue lors de l'éxécution de la commande");
            return $this->line($ex);
        }

        return  $this->info('Suppression rôle effectué');
    }
}
