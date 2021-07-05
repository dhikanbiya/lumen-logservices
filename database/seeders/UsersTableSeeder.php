<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'ipaddr' => '::1',
                'description' => 'localhost',
                'role' => 0,
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ],
            [
                'ipaddr' => '202.46.12.254',
                'description' => 'VPN iOTENTIK',
                'role' => 1,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ]
        ];

        User::insert($data);

    }
}
