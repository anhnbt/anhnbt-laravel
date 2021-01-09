<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tao moi admin
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("admin");
        $user->admin = 1;
        $user->save();
        //tao user binh thuong
        $user = new User();
        $user->name = "user";
        $user->email = "user@gmail.com";
        $user->password = bcrypt("user");
        $user->admin = 0;
        $user->save();
    }
}
