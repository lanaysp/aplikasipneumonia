<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];


        DB::beginTransaction();
        try {
            $user = User::create(array_merge([
                'email' => 'user@gmail.com',
                'name' => 'user',
            ], $default_user_value));

            $faskes = User::create(array_merge([
                'email' => 'faskes@gmail.com',
                'name' => 'faskes',
            ], $default_user_value));

            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
            ], $default_user_value));

            $role_user = Role::create(['name' => 'user']);
            $role_faskes = Role::create(['name' => 'faskes']);
            $role_admin = Role::create(['name' => 'admin']);

            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);

            $user->assignRole('user');
            $faskes->assignRole('faskes');
            $admin->assignRole('admin');
            DB::commit();
        } catch (\Throwable $th) {
           DB::rollBack();
        }
    }
}
