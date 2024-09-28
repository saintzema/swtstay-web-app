<?php

namespace App\Enums;

enum UserRoles: string
{
    case ADMIN = "admin";
    case HOTEL_OWNER = "hotel_owner";
    case HOTEL_STAFF = "hotel_staff";
}
