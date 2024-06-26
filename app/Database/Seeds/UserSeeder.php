<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = model('UserModel');

        $users = [
            new User([
                'username' => 'admin',
                'email'    => 'admin@soundify.com',
                'password' => 'admin',
            ]),
        ];

        foreach ($users as $user) {
            $userModel->save($user);
        }
    }
}
