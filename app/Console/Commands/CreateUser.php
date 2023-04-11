<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    protected $signature = 'user:create {username} {password}';
    protected $description = 'Create a new user';
    public function handle(): void
    {
        $user = new User();
        $user->username = $this->argument('username');
        $user->password = bcrypt($this->argument('password'));
        $user->save();
        $this->info('User created successfully.');
    }
}
