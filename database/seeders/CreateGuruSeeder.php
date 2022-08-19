<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class CreateGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'name' => 'Muhammad Yasin',
            'nip'  => '219312230909',
            'email'=> 'yasin@gmail.com',
            'password'=> Hash::make('yasin123'),
            'tempat_lahir' => 'Sumenep',
            'tanggal_lahir' => '2021-12-21',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'JL.Guntur No.10',
            'no_telp' => '087850272625',
            'role' => 'guru',
        ]);
    }
}
