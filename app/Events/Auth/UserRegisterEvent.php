<?php

namespace App\Events\Auth;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegisterEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $otp;
    /**
     * Create a new event instance.
     */
    public function __construct($user, $otp = null)
    {
        $this->user = $user;
        $this->otp = $otp;
    }
}
