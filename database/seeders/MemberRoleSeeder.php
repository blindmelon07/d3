<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MemberRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get or create the member role
        $memberRole = Role::firstOrCreate(['name' => 'member']);

        // Define permissions that members should have
        // Members can only view their own profiles (no editing)
        $permissionsToAssign = [
            'ViewAny:Users',
            'View:Users',
            'ViewAny:Member',
            'View:Member',
        ];

        // Get the permissions
        $permissions = Permission::whereIn('name', $permissionsToAssign)->get();

        // Sync permissions to the member role (removes old ones and adds these)
        $memberRole->syncPermissions($permissions);

        $this->command->info('Member role permissions configured successfully!');
        $this->command->info('Assigned permissions: '.$permissions->pluck('name')->implode(', '));
    }
}
