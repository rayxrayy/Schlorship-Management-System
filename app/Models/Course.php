<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
     protected $fillable = [
        'coursename', 
        'code',
        'module',
        'fee',
        'department',
        'description',
    ];
    //to retrive user name of user in different form
    public function user()
    {
        return $this->belongsTo(User::class, 'user_name', 'name');
    }
    public function modules()
    {
    return $this->hasMany(Module::class);
    }
    public function college()
    {
        return $this->belongsTo(College::class);
    }
    
}