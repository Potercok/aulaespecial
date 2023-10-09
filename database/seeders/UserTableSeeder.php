<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
    User::create([
        'name' => 'jorge',
        'email' => 'ma@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('12345678'), //'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'role' => 'admin',
                ]);
    User::factory()
            ->count(20)
            ->create();
        }
}
