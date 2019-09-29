<?php

use App\User;
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
        for ($i=0; $i<5; $i++) {
            $userName = "user_$i";
            if (!User::where('name', $userName)->first()) {
                User::create(['name' => $userName]);
            }
        }
    }
}
