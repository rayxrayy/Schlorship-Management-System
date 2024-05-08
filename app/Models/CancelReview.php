<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'collegename', // Include college attribute
        'coursename',  // Include course attribute
        'conmment',
    ];
}