<?php

namespace App\Enums;

enum RoomType: string
{
    case SINGLE = 'Single Room';
    case DOUBLE = 'Double Room';
    case TWIN = 'Twin Room';
    case TRIPLE = 'Triple Room';
    case QUEEN = 'Queen Room';
    case KING = 'King Room';
    case DOUBLE_DOUBLE = 'Double-Double Room';
    case STUDIO = 'Studio Room';
    case SUITE = 'Suite';
    case JUNIOR_SUITE = 'Junior Suite';
    case MASTER_SUITE = 'Master Suite';
    case CONNECTING_ROOMS = 'Connecting Rooms';
    case ACCESSIBLE_ROOM = 'Accessible Room';
    case CABANA = 'Cabana Room';
    case VILLA = 'Villa';
    case PENTHOUSE_SUITE = 'Penthouse Suite';
}
