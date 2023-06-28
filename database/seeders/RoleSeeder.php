<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Admin_prestamo']);
        $role3 = Role::create(['name' => 'Instructor']);

        Permission::create(['name' => 'dash'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'ambientes.ambientes'])->syncRoles([$role1]);
        Permission::create(['name' => 'llaves.llaves'])->syncRoles([$role1]);
        Permission::create(['name' => 'estado.estado'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'registro.registro'])->syncRoles([$role1, $role2, $role3]);

    }
}
