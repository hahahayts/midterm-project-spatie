<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;


class RolesAndPersmission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $create_record = Permission::create(['name' => 'create-records']);
        $edit_record = Permission::create(['name' => 'edit-records']);
        $delete_record = Permission::create(['name' => 'delete-records']);

        $adminRole = Role::create(['name' => 'admin']);
        $dataEntryRole = Role::create(['name' => 'data-entry']);

        $adminRole->givePermissionTo([$create_record, $edit_record, $delete_record]);
        $dataEntryRole->givePermissionTo([$create_record]);

        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin111')
        ]);
        $dataEntryUser = User::create([
            'name' => 'Jeric',
            'email' => 'jeric@gmail.com',
            'password' => bcrypt('jeric111')
        ]);

        $adminUser->assignRole($adminRole);
        $dataEntryUser->assignRole($dataEntryRole);
    }
}
