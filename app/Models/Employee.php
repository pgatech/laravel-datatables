<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'date_of_birth',
        'gender',
        'marital_status',
        'address',
        'city',
        'postal_code',
        'country',
        'job_title',
        'department',
        'employment_type',
        'hire_date',
        'salary',
        'bonus',
        'work_email',
        'work_phone',
        'office_location',
        'shift_start_time',
        'shift_end_time',
        'vacation_days',
        'sick_days',
        'emergency_contact_name',
        'emergency_contact_phone',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'hire_date' => 'date',
        'shift_start_time' => 'datetime:H:i',
        'shift_end_time' => 'datetime:H:i',
    ];
}
