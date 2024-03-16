<?php

namespace Database\Seeders;

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
        $user= User::updateOrCreate([
            'name'=>'Administrator',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password'),
        ]);

        //$user->assignRole(Role::find(1));
    }
}
