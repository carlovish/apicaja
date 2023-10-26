<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable=[
        'concept',
        'local_amount',
        'date',
        'document',
        'account'
    ];

    
}
