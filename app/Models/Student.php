<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function contactInformation()
    {
        return $this->hasOne(ContactInformation::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses');
    }
}
