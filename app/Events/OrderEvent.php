<?php

namespace App\Events;


use App\Mail\OrderCreated;
use App\Mail\UserCreated;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use App\Item;
use Log;
use App\User;
use App\Order;
use Illuminate\Support\Facades\Mail;

class OrderEvent

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
    public function orderCreated(Order $order)
    {
        $user = $order->user;
        Mail::to($user)->send(new OrderCreated($order));
    }
}