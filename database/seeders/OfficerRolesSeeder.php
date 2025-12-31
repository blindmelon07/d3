<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class OfficerRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define all officer roles
        $officerRoles = [
            'president',
            'vice_president',
            'secretary',
            'treasurer',
            'governor',
            'vice_governor',
            'district_secretary',
            'district_treasurer',
        ];

        // Create each role if it doesn't exist
        foreach ($officerRoles as $roleName) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $this->command->info("Role '{$roleName}' created/verified.");
        }

        // Define permissions that all officer roles should have
        // Officers have broader access than regular members but less than admins
        $officerPermissions = [
            'ViewAny:Member',
            'View:Member',
            'ViewAny:Users',
            'View:Users',
        ];

        // Get the permissions that exist
        $permissions = Permission::whereIn('name', $officerPermissions)->get();

        // Assign permissions to all officer roles
        foreach ($officerRoles as $roleName) {
            $role = Role::findByName($roleName);
            $role->syncPermissions($permissions);
        }

        $this->command->info('Officer roles created successfully!');
        $this->command->info('Created roles: '.implode(', ', $officerRoles));
        $this->command->info('Assigned permissions: '.$permissions->pluck('name')->implode(', '));
    }
}
