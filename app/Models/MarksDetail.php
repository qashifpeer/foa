<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarksDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'exam',
        'rollNumber',
        'board',
        'session',
        'marksObtained',
        'maxMarks',
        'percentage'




    ];
}
