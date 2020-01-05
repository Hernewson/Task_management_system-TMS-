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
        $user = User::where('email', 'hernewson8@gmail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Niranjan Shrestha',
                'email' => 'hernewson8@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('password'),
                'image'=> 'users/admin/dp.jpeg',
                'username'=>'hernewson',
                'phone'=>'9844228168',
                'address' => 'Banglamukhi'
            ]);
        }
    }
}
