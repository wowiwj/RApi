<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class,60)->create();
        $user = \App\Models\User::find(1);
        $user->phone = "13888888888";
        $user->password = bcrypt("123456");
        $user->save();
    }
}
