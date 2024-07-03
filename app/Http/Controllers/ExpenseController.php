<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return response()->json(['expenses' => $expenses]);
    }

    public function create()
    {
        // Not applicable for JSON API
    }

    public function store(Request $request)
    {
        $expense = Expense::create($request->all());
        return response()->json(['message' => 'Expense created successfully', 'expense' => $expense]);
    }

    public function edit(Expense $expense)
    {
        // Not applicable for JSON API
    }

    public function update(Request $request, Expense $expense)
    {
        $expense->update($request->all());
        return response()->json(['message' => 'Expense updated successfully', 'expense' => $expense]);
    }

    public function destroy($id)
    {
        $expense = Expense::find($id);
        if (!$expense) {
            return response()->json(['error' => 'ID Not found'], 404);
        }
        $expense->delete();
        return response()->json(['message' => 'Expense deleted successfully'], 200);
    }
}
