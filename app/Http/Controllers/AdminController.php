<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    public function login(Request $request)
    {
        // Validate request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            // Find the admin by email
            $admin = Admin::where('email', $request->email)->firstOrFail();

            if (password_verify($request->password, $admin->password)) {
                // Authentication successful
                return response()->json(['success' => true]);
            } else {
                // Authentication failed
                return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
            }
        } catch (\Exception $e) {
            // Admin not found
            return response()->json(['success' => false, 'message' => 'Admin not found'], 404);
        }
    }
}