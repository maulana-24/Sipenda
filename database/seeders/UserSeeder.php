<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'admin@com',
            'role_id' => '1',
        ]);

        DB::table('users')->insert([
            'username' => 'client1',
            'password' => Hash::make('client1'),
            'email' => 'client1@com',
            'role_id' => '2',
        ]);
    }
}
