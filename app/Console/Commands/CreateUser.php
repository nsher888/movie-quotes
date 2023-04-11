<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    protected $signature = 'movie-quotes:create-user';
    protected $description = 'Create a new user';

    public function handle()
    {
        $username = $this->ask('Enter a username:');
        $password = $this->secret('Enter a password:');

        if (empty($username) || empty($password)) {
            $this->error('Both username and password are required.');
            return;
        }

        if (User::where('username', $username)->exists()) {
            $this->error('Username already exists.');
            return;
        }

        $user = new User();
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->save();

        $this->info('User created successfully.');
    }
}
