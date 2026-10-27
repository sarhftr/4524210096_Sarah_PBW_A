<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@authbook.test',
                'role' => 'admin',
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@authbook.test',
                'role' => 'staff',
            ],
            [
                'name' => 'Viewer',
                'email' => 'viewer@authbook.test',
                'role' => 'viewer',
            ],
        ];

        foreach ($users as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'role' => $data['role'],
                    'password' => Hash::make('Authbook123!'),
                ]
            );
        }
    }
}
