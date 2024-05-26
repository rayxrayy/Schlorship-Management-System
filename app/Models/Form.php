<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
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

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id');

    }
    
}