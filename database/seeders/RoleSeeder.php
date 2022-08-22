<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [[
             'role' => 'admin',
        ],
        [
            'role' => 'guru',
        ],
        [
            'role' => 'siswa',
        ],
        [
            'role' => 'wali kelas',
        ]
    ];

        foreach ($role as $roles) {
             Role::create($roles);
        }
    }
}
