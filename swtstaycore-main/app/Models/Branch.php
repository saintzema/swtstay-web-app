<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function analytics()
    {
        return $this->hasMany(Analytics::class);
    }

    public function hotelStaff()
    {
        return $this->hasMany(HotelStaff::class);
    }
}

