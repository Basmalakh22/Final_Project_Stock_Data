<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::created([
           'name' => 'Basmala Khaled',
           'email' => 'basmalakha772@gmail.com',
           'password' => Hash::make('password'),
           'phone_number' =>'123456789',
        ]);
        //or
        DB::table('users')->insert([
            'name' => 'Basmala Khaled',
           'email' => 'basmala@gmail.com',
           'password' => Hash::make('password'),
           'phone_number' =>'1256789',
        ]);
    }
}
