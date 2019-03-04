<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-03-04 06:27:23',
            'updated_at' => '2019-03-04 06:27:23',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '17',
                'title'      => 'country_create',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '18',
                'title'      => 'country_edit',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '19',
                'title'      => 'country_show',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '20',
                'title'      => 'country_delete',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '21',
                'title'      => 'country_access',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '22',
                'title'      => 'hotel_create',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '23',
                'title'      => 'hotel_edit',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '24',
                'title'      => 'hotel_show',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '25',
                'title'      => 'hotel_delete',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '26',
                'title'      => 'hotel_access',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '27',
                'title'      => 'booking_create',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '28',
                'title'      => 'booking_edit',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '29',
                'title'      => 'booking_show',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '30',
                'title'      => 'booking_delete',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ],
            [
                'id'         => '31',
                'title'      => 'booking_access',
                'created_at' => '2019-03-04 06:27:23',
                'updated_at' => '2019-03-04 06:27:23',
            ]];

        Permission::insert($permissions);
    }
}
