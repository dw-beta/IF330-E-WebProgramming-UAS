<?php

// app/Console/Commands/MakeAdmin.php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeAdmin extends Command
{
    protected $signature = 'make:admin {userId}';
    protected $description = 'Make a user an admin';

    public function handle()
    {
        $userId = $this->argument('userId');
        $user = User::find($userId);

        if ($user) {
            // Update the user's role to 'admin'
            $user->update(['role' => 'admin']);

            $this->info('User is now an admin.');
        } else {
            $this->error('User not found.');
        }
    }
}
