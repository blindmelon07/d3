<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Contribution;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class ContributionPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        // Super admin can view all
        if ($authUser->hasRole('super_admin')) {
            return true;
        }

        // Other users can view (but will be scoped to their own contributions)
        return true;
    }

    public function view(AuthUser $authUser, Contribution $contribution): bool
    {
        // Super admin can view all
        if ($authUser->hasRole('super_admin')) {
            return true;
        }

        // Users can only view their own member's contributions
        return $contribution->member && $contribution->member->user_id === $authUser->id;
    }

    public function create(AuthUser $authUser): bool
    {
        // All users can create their own contributions
        return true;
    }

    public function update(AuthUser $authUser, Contribution $contribution): bool
    {
        // Super admin can update all
        if ($authUser->hasRole('super_admin')) {
            return true;
        }

        // Treasurer and district_treasurer can update status
        if ($authUser->hasRole(['treasurer', 'district_treasurer'])) {
            return true;
        }

        // Users can update their own contributions (except status)
        return $contribution->member && $contribution->member->user_id === $authUser->id;
    }

    public function delete(AuthUser $authUser, Contribution $contribution): bool
    {
        // Only super admin can delete contributions
        return $authUser->hasRole('super_admin');
    }

    public function restore(AuthUser $authUser, Contribution $contribution): bool
    {
        return $authUser->can('Restore:Contribution');
    }

    public function forceDelete(AuthUser $authUser, Contribution $contribution): bool
    {
        return $authUser->can('ForceDelete:Contribution');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Contribution');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Contribution');
    }

    public function replicate(AuthUser $authUser, Contribution $contribution): bool
    {
        return $authUser->can('Replicate:Contribution');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Contribution');
    }
}
