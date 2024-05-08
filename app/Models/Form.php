<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'dob',
        'gender',
        'address',
        'number',
        'email',
        'pname',
        'pnumber',
        'qualification',
        'currentedu',
        'major',
        'result',
        'document_citizenship',
        'document_sop',
        'document_transcript',
        'document',
        'description',
        'college', // Include college attribute
        'course',  // Include course attribute
        'profile_image',
    ];
}