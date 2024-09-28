<?php

namespace App\Enums;

enum BookingMethod: string
{
    case ONLINE = 'online';
    case OFFLINE = 'offline';
}
