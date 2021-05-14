<?php

namespace App\Events;

use App\User;
use App\LocationTracking;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LocationSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * User that sent the message
     *
     * @var \App\User
     */
    // public $user;

    /**
     * Message details
     *
     * @var \App\LocationTracking
     */
    public $locationTracking;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(LocationTracking $locationTracking)
    {
        // $this->user = $user;

        $this->locationTracking = $locationTracking;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('locchannel');
        // return new PresenceChannel('locchannel');
    }
}
