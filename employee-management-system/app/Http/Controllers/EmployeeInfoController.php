<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeInfo;

class EmployeeInfoController extends Controller
{
    public function index()
    {

        // return view("welcome");
        $employeeInfos = EmployeeInfo::all();
        return view('employee.index', compact('employeeInfos'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|in:male,female,other',
            'nationality' => 'required|string|max:255',
            'email' => 'required|email|unique:employee_infos,email',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Create a new employee
        EmployeeInfo::create([
            'full_name' => $request->input('full_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'gender' => $request->input('gender'),
            'nationality' => $request->input('nationality'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            // Add more fields as needed
        ]);

        return redirect()->route('employee.index')->with('success', 'Employee added successfully');
    }

    public function show(EmployeeInfo $employeeInfo)
    {
        return view('employee.show', compact('employeeInfo'));
    }

    public function edit(EmployeeInfo $employeeInfo)
    {
        return view('employee.edit', compact('employeeInfo'));
    }

    public function update(Request $request, EmployeeInfo $employeeInfo)
    {
        // Validate the request
        $request->validate([
            // Add validation rules here
        ]);

        // Update the employee
        $employeeInfo->update($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully');
    }

    public function destroy(EmployeeInfo $employeeInfo)
    {
        // Delete the employee
        $employeeInfo->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully');
    }
}
