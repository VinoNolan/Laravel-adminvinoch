<?php

namespace Database\Seeders;

use App\Models\UserPembeli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserPembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPembeli::create([
            "name" => "Ganjar",
            "email" => "ganjar@gmail.com",
            "password" => Hash::make("123"),
            "asalkota" => 'Semarang',
        ]);
    }
}
