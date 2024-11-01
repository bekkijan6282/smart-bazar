<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::all();

        foreach($roles as $role) {
            User::create([
                'role_id' => $role->id,
                'full_name' => $role->display_name,
                'email' => $role->name.'@gmail.com',
                'status' => 'active',
                'password' => bcrypt('123456789'),
            ]);
        }
    }
}
