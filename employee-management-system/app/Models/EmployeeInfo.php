<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'date_of_birth',
        'gender',
        'nationality',
        'email',
        'phone_number',
        'address',
    ];
}
