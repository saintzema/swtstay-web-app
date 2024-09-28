<?php

namespace App\Enums;

enum TeamRole: string
{
    case RECEPTIONIST = "Receptionist";
    case GENERAL_MANAGER = "General Manager";
    case ASSISTANT_MANAGER = "Assistant Manager";
}
