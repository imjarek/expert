<?php



namespace App\Events;


use App\Mail\UserCreated;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use App\Item;
use Log;
use App\User;
use Illuminate\Support\Facades\Mail;

class UserEvent

{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function userCreated(User $user)
    {
        Mail::to($user)->send(new UserCreated($user));
    }
}