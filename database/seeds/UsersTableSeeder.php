<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'stanislav960904@gmail.com',
            'password' => bcrypt(config('services.authentication.password'))
        ]);
    }
}
