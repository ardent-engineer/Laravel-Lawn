<?php

// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'services',
        'user_id'
    ];

    protected $casts = [
        'services' => 'array',  // Cast the services field as an array
    ];
}

