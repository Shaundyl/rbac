<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Hash;

class NewUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newUser1 = User::firstOrCreate(
            ['email' => 'newuser1@example.com'],
            ['name' => 'newuser1', 'password' => Hash::make('password123')]
        );  
        $newUser1->roles()->syncWithoutDetaching([1]); // Assuming 1 is the ID of the admin role
        UserInfo::firstOrCreate([
            'user_id' => $newUser1->id,
            'user_firstname' => 'New',
            'user_lastname' => 'User1'
        ]);

        $newUser2 = User::firstOrCreate(
            ['email' => 'newuser2@example.com'],
            ['name' => 'newuser2', 'password' => Hash::make('password123')]
        );
        $newUser2->roles()->syncWithoutDetaching([2]); // Assuming 2 is the ID of the bookeeper role
        UserInfo::firstOrCreate([
            'user_id' => $newUser2->id,
            'user_firstname' => 'New',
            'user_lastname' => 'User2'
        ]);

        // Add more users as needed
    }
}
