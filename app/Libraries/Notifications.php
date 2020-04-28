<?php
namespace App\Libraries;
use App\Libraries\NotificationsInterfaces;


class Notifications implements NotificationsInterface
{
    public function send()
    {
        var_dump('notify');
    }
}