<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('Name?');
        $email = $this->ask('Email?');
        $pass = $this->ask('Password?');

        if (User::where(['email' => $email])->first()) {
            throw new \Exception('Already exists');
        }
        $user = User::create(['name'=> $name, 'email' => $email, 'password' => Hash::make($pass)]);
        $this->info('User created: ' . $user->id);
    }
}
