<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
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
      $guru = [[
            'name' => 'Muhammad Yasin',
            'nip'  => '219312230909',
            'email'=> 'yasin@gmail.com',
            'password'=> Hash::make('yasin123'),
            'tempat_lahir' => 'Sumenep',
            'tanggal_lahir' => '2021-12-21',
            'alamat' => 'JL.Guntur No.10',
            'no_telp' => '087850272625',
            'role_id'   => 1,

            'gender_id' => 1
      ],

        [
            'name' => 'Rachmat Hikam',
            'nip'  => '2103191228',
            'email'=> 'hikam17@gmail.com',
            'password'=> Hash::make('hikam123'),
            'tempat_lahir' => 'Sumenep',
            'tanggal_lahir' => '2001-07-01',
            'alamat' => 'JL.Guntur No.10',
            'no_telp' => '087850272625',
            'role_id'   => 2,
            'gender_id' => 1
        ],
        [
            'name' => 'Si Fulan ',
            'nip'  => '2103191228',
            'email'=> 'fulan@gmail.com',
            'password'=> Hash::make('fulan123'),
            'tempat_lahir' => 'Sumenep',
            'tanggal_lahir' => '2001-07-01',
            'alamat' => 'JL.Guntur No.10',
            'no_telp' => '087850272625',
            'role_id'   => 3,
            'gender_id' => 1
        ]];


        foreach ($guru as $k){
            Guru::updateOrCreate($k);
        }
    }
}
