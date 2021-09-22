<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;

class EmployeesController extends Controller
{
    /*Auth Middleware */
    public function __construct() {
        $this->middleware(['auth']);
    }

    /*Return Employees View */
    public function index() {
        $companies = Company::paginate(10);
        $employees = Employee::paginate(10);

        return view('employees', compact('employees', 'companies'));
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

    /*Edit function for employees */
    public function update(Request $request, $id) {
        $this->validate(request(), [
            'edit_company_name' => 'required',
            'edit_first_name' => 'required',
            'edit_last_name' => 'required',
            'edit_email' => 'required|email',
            'edit_phone' => 'required',
        ]);

        Employee::where('id', $id)->update([
            'company_id' => request('edit_company_name'),
            'first_name' => request('edit_first_name'),
            'last_name' => request('edit_last_name'),
            'email' => request('edit_email'),
            'phone' => request('edit_phone')
        ]);

        return redirect('employees');
    }

    /*Delete function for emoloyees */
    public function destroy($id) {
        Employee::where('id', $id)->delete();

        return redirect('employees');
    }
}
