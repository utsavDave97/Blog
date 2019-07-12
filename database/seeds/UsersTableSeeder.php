<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','utsavdave1997@gmail.com')->first();

        if(!$user)
        {
            User::create([
                'name' => 'Utsav Dave',
                'email' => 'utsavdave1997@gmail.com',
                'role' => 'admin',
                'password' => \Illuminate\Support\Facades\Hash::make('utsav123')
            ]);
        }
    }
}
