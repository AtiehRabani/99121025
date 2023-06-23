<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacuumCleaners extends Model
{
    use HasFactory;
    protected $fillable= ['size','color','price','brand'];

    // compare
    public function scopePriceMatches($query, $price)
    {
        return $query->where('price', $price);
    }
}