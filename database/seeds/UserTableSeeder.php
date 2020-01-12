<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Miguel Carmona',
                'email' => 'miguelcar18@gmail.com',
                'password' => 'password',
                'email_verified_at' => date('Y-m-d H:m:s'),
            ],
        ])->each(function ($user) {
            $user = User::firstOrCreate(['email' => $user['email']], $user);
            if ($user->wasRecentlyCreated) {
                $user->setPassword($user['password']);
            }
        });

        factory(App\User::class, 3)->create();
    }
}
