<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Academy;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a sample academy
        $tenant = Academy::create([
            'name' => 'Academy One',
        ]);

        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
        $adminTeacherRole = Role::firstOrCreate(['name' => 'Admin Teacher']);
        $studentRole = Role::firstOrCreate(['name' => 'Student']);

        // Seed Super Admin user
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
            'role_id' => $superAdminRole->id,
            'tenant_id' => null,
        ]);

        // Seed an Admin Teacher for the tenant
        User::create([
            'name' => 'Admin Teacher',
            'email' => 'adminteacher@academyone.com',
            'password' => Hash::make('password'),
            'role_id' => $adminTeacherRole->id,
            'tenant_id' => $tenant->id,
        ]);

        // Seed a Student for the tenant
        User::create([
            'name' => 'Student One',
            'email' => 'student@academyone.com',
            'password' => Hash::make('password'),
            'role_id' => $studentRole->id,
            'tenant_id' => $tenant->id,
        ]);
    }
}
