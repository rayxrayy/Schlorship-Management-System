<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelStudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'username',
        'collegename', // Include college attribute
        'coursename',  // Include course attribute
        'conmment',
    ];
}