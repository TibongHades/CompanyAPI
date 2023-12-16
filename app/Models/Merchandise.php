<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    public function soldItems() {
        return $this->hasMany(SoldItems::class);
    }

    public function purchasedItems() {
        return $this->hasMany(PurchasedItems::class);
    }
}
