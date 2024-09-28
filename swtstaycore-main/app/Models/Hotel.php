<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the hotel images.
     */
    // protected function images(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn(string $value) => json_decode(($value)),
    //     );
    // }
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

    public function hotelOwner()
    {
        return $this->belongsTo(HotelOwner::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function apiIntegrations()
    {
        return $this->hasMany(ApiIntegration::class);
    }
}

