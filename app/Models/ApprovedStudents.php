<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedStudents extends Model
{
    use HasFactory;
     protected $fillable = [
        'student_id',
        'image',
        'fullname',
        'description',
        'fee',
        'course',
        'approved_by',
    ];
}