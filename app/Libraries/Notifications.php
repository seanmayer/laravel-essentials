<?php
namespace App\Libraries;
use App\Libraries\NotificationsInterfaces;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reservations;

class Notifications implements NotificationsInterface
{
    public function send()
    {
        Mail::to('sample@test.com')->send(new Reservations('Sean Mayer'));
    }
}