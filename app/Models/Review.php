<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'customer', 'star', 'review'
    ];
    use HasFactory;
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
