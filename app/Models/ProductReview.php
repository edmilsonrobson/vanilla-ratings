<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;

    protected $attributes = [
        'review_text' => ''
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
