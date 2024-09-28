<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'iso2', 'iso3', 'phone_code', 'capital', 'currency', 'currency_code', 'currency_symbol', 'tld', 'native', 'region', 'subregion', 'active'];

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
