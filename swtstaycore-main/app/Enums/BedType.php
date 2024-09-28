<?php

namespace App\Enums;

enum BedType: string
{
    case SINGLE = 'Single Bed';
    case TWIN = 'Twin Bed';
    case DOUBLE = 'Double Bed';
    case QUEEN = 'Queen Bed';
    case KING = 'King Bed';
    case CALIFORNIA_KING = 'California King Bed';
    case TWIN_XL = 'Twin XL Bed';
    case FULL = 'Full Bed';
    case MURPHY = 'Murphy Bed';
    case SOFA = 'Sofa Bed';
    case BUNK = 'Bunk Bed';
    case FUTON = 'Futon';
}
