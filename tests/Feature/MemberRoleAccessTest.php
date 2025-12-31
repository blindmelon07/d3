<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;

use function Pest\Laravel\actingAs;

uses(RefreshDatabase::class);

beforeEach(function () {
    // Create roles
    Role::create(['name' => 'member']);
    Role::create(['name' => 'admin']);
});

it('allows member to view their own profile', function () {
    $member = User::factory()->create();
    $member->assignRole('member');

    actingAs($member);

    // Member can view themselves
    expect($member->can('view', $member))->toBeTrue();
});

it('prevents member from viewing other users', function () {
    $member = User::factory()->create();
    $member->assignRole('member');

    $otherUser = User::factory()->create();

    actingAs($member);

    // Member cannot view other users
    expect($member->can('view', $otherUser))->toBeFalse();
});

it('allows member to update their own profile', function () {
    $member = User::factory()->create();
    $member->assignRole('member');

    actingAs($member);

    // Member can update themselves
    expect($member->can('update', $member))->toBeTrue();
});

it('prevents member from updating other users', function () {
    $member = User::factory()->create();
    $member->assignRole('member');

    $otherUser = User::factory()->create();

    actingAs($member);

    // Member cannot update other users
    expect($member->can('update', $otherUser))->toBeFalse();
});

it('prevents member from creating users', function () {
    $member = User::factory()->create();
    $member->assignRole('member');

    actingAs($member);

    // Member cannot create users
    expect($member->can('create', User::class))->toBeFalse();
});

it('prevents member from deleting users', function () {
    $member = User::factory()->create();
    $member->assignRole('member');

    $otherUser = User::factory()->create();

    actingAs($member);

    // Member cannot delete users
    expect($member->can('delete', $otherUser))->toBeFalse();
    expect($member->can('delete', $member))->toBeFalse();
});

it('allows admin to view all users', function () {
    $admin = User::factory()->create();
    $admin->assignRole('admin');

    $otherUser = User::factory()->create();

    actingAs($admin);

    // Admin can view any user
    expect($admin->can('view', $otherUser))->toBeTrue();
    expect($admin->can('create', User::class))->toBeTrue();
});
