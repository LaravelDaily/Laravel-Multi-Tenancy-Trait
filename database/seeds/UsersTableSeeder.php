<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$9EbDnhuES33iCtvLwRAPBubfdvlJuC2hY4GdMFdoCvdncj6hEu7am',
            'remember_token' => null,
            'created_at'     => '2019-03-04 06:24:27',
            'updated_at'     => '2019-03-04 06:24:27',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
