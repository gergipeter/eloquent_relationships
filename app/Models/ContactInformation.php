<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    protected $table = 'contact_informations';

    protected $fillable = ['student_id', 'address'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
