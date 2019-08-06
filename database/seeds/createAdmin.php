<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class createAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brenno = new User();
        $brenno->name = "Brenno";
        $brenno->email = "brenno_email.com";
        $brenno->password = Hash::make("12345678");
        $brenno->admin = 0;

        $brenno->save();

    }
}
