<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'index posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'publish posts']);
        Permission::create(['name' => 'unpublish posts']);

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $superadmin = Role::create(['name' => 'superadmin']);
        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'elsakcf@gmail.com',
        ]);
        $user->assignRole($superadmin);

        // create demo admin
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('index posts');
        $admin->givePermissionTo('publish posts');
        $admin->givePermissionTo('unpublish posts');
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ]);
        $user->assignRole($admin);


        // create demo member
        $member = Role::create(['name' => 'member']);
        $user = \App\Models\User::factory()->create([
            'name' => 'Member',
            'email' => 'member@example.com',
        ]);
        $user->assignRole($member);
    }
}
