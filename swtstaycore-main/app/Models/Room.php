<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Room extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Accessor for images field to return full URLs
    protected function images(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $images = json_decode($value, true);
                if (is_array($images)) {
                    return array_map(function ($imagePath) {
                        return Storage::disk('spaces')->url($imagePath);
                    }, $images);
                }
                return [];
            },
        );
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

