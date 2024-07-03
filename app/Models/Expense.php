<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'expense_id',
        'expense_amount',
        'expense_category',
        'expense_type',
        'expense_date',
    ];
}
