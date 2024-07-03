<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employee_name',
        'employee_email',
        'employee_address',
        'employee_contact_number',
        'employee_birthdate',
        'employee_department',
        'employee_salary',
        'employee_status',
    ];
}
