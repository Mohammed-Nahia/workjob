<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'=>'Mohammed Nahia',
            'email'=>'Moh@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt(123)
        ]);
    }
}
