<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarksDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'rollNumber_10th',
        'board_10th',
        'session_10th',
        'marksObtained_10th',
        'maxMarks_10th',
        'percentage_10th',
        'rollNumber_12th',
        'board_12th',
        'session_12th',
        'marksObtained_12th',
        'maxMarks_12th',
        'percentage_12th'




    ];
}
