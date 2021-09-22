<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /*Auth Middleware */
    public function __construct() {
        $this->middleware(['auth']);
    }

    /*Return Employees View */
    public function index() {
        return view('employees');
    }

    /*Store Employee */
    public function store(Request $request)
    {
        request()->validate([
            'company_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Employee::create($request->all());

        return back()->with('success', 'Employee has been created!');
    }
}
