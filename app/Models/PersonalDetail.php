<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id ',
        'firstName',
        'middleName',
        'lastName',
        'fatherName	',
        'motherName',
        'guardianName',
        'emailPrimary',
        'emailAlternate',
        'contactPrimary',
        'contactAlternate',
        'cat_ID ',
        'status',

    ];
}
