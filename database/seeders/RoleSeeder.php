<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        ROLES & PERMISSIONS
//        - Administrateur
//            - root
//        - Responsable Entreprise
//            - my_access (accès à la partie my)
//            - admin_access (accès à la partie admin)
//            - company_access (accéder aux données, views de la company)
//            - company_edit (éditer les données de la company)
//        - RH
//            - my_access (accès à la partie my)
//            - admin_access (accès à la partie admin)
//            - folder_access (accès aux dossiers de plaintes)
//        - DRH
//            - my_access (accès à la partie my)
//            - admin_access (accès à la partie admin)
//            - folder_access (accès aux dossiers de plaintes)
//        - Collaborateur
//            - my_access (accès à la partie my)
//        - Service informatique
//            - it_service_access (accès aux boutons et fonctions d'import / export


        Role::create(['name'=>'Administrateur']);
        Permission::create(['name'=>'root']);
        Role::findByName('Administrateur')->givePermissionTo(['name'=>'root']);

        Role::create(['name'=>'Responsable entreprise']);
        Permission::create(['name'=>'admin_access']);
        Permission::create(['name'=>'my_access']);
        Permission::create(['name'=>'company_access']);
        Permission::create(['name'=>'company_edit']);
        Role::findByName('Responsable entreprise')->givePermissionTo(['admin_access', 'my_access', 'company_access', 'company_edit']);

        Role::create(['name'=>'RH']);
        Permission::create(['name'=>'folder_access']);
        Role::findByName('RH')->givePermissionTo(['admin_access', 'my_access', 'folder_access']);

        Role::create(['name'=>'DRH']);
        Role::findByName('RH')->givePermissionTo(['admin_access', 'my_access', 'folder_access']);

        Role::create(['name'=>'Collaborateur']);
        Role::findByName('Collaborateur')->givePermissionTo('my_access');

        Role::create(['name'=>'Service informatique']);
        Permission::create(['name'=>'it_service_access']);
        Role::findByName('Service informatique')->givePermissionTo('it_service_access');
    }
}
