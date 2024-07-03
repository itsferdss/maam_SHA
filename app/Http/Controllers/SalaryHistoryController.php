<?php

namespace App\Http\Controllers;

use App\Models\SalaryHistory;
use Illuminate\Http\Request;

class SalaryHistoryController extends Controller
{
    public function show($employeeId)
    {
        // Fetch salary history data for the specified employee ID
        $salaryHistory = SalaryHistory::where('employee_id', $employeeId)->get();
        
        return response()->json(['salaryHistory' => $salaryHistory]);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'employee_name' => 'required',
            'employee_department' => 'required',
            'employee_salary' => 'required',
            'employee_status' => 'required|in:PAID,UNPAID,PENDING',
            'employee_date_given' => 'required|date',
        ]);

        // Create a new salary history entry
        $salaryHistory = new SalaryHistory();
        $salaryHistory->employee_id = $request->employee_id;
        $salaryHistory->employee_name = $request->employee_name;
        $salaryHistory->employee_department = $request->employee_department;
        $salaryHistory->employee_salary = $request->employee_salary;
        $salaryHistory->employee_status = $request->employee_status;
        $salaryHistory->employee_date_given = $request->employee_date_given;
        $salaryHistory->save();

        // Return a success response
        return response()->json(['message' => 'Salary history stored successfully'], 201);
    }

    
    
}