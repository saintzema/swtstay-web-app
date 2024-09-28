<?php

namespace App\Enums;

enum BranchStatus : string
{
    case PENDING = "pending";
    case ACTIVE = "active";
    case SUSPENDED = "suspended";
    case CLOSED = "closed";
}
