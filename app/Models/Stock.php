<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Stock extends Model
{
    use HasFactory;

    public function seller(): HasOne
    {
        return $this->hasOne(Seller::class);
    }
    public function product(): HasMany
    {
        return $this->hasMany(Seller::class);
    }
}
