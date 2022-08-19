<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
           [
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
           ],

           [
            'name' => 'Wali Kelas',
            'email' => 'walikelas@gmail.com',
            'password' => bcrypt('walikelas123'),
            'role' => 'wali'
           ],

           [
            'name' => 'Siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('siswa123'),
            'role' => 'siswa'
           ],


        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
