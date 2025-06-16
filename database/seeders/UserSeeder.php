<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Michael Angel',
            'email' => 'kameku01@gmail.com',
            'password' => Hash::make('Santi.22'),
            
        ]);

        $admin->assignRole('admin');

        $editor = User::create([

            'name' => 'Editor',
            'email' => 'test@test.com',
            'password' => Hash::make('test'),
            
        ]);

        $editor->assignRole('editor');
    }
}
