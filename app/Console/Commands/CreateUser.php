<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    protected $signature = 'user:create';
    protected $description = 'Create a new user';
    public function handle(): void
    {
        $username = $this->ask('Enter a username:');
        $password = $this->secret('Enter a password:');

        $user = new User();
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->save();

        $this->info('User created successfully.');
    }
}
