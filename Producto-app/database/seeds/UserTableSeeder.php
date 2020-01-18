<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User;
        $u->name = "admin";
        $u->email = "admin@admin.com";
        $u->password = bcrypt("user123");
        $u->save();

        $u = new User;
        $u->name = "user";
        $u->email = "user@admin.com";
        $u->password = bcrypt("user123");
        $u->save();
    }
}
