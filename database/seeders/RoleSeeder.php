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
        Role::create(['name'=>'Administrateur']);
        Permission::create(['name'=>'root']);
        Role::findByName('Administrateur')->givePermissionTo(['name'=>'root']);

        Role::create(['name'=>'Responsable entreprise']);
        Permission::create(['name'=>'edit company']);
        Permission::create(['name'=>'connect admin']);
        Permission::create(['name'=>'connect my']);
        Role::findByName('Responsable entreprise')->givePermissionTo(['edit company', 'connect admin', 'connect my']);

        Role::create(['name'=>'Collaborateur']);
        Role::findByName('Collaborateur')->givePermissionTo('connect my');
    }
}
