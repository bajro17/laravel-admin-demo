<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Practice;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::paginate(10);
        $practice = Practice::all();
        return view('admin.employee.index', ['employee' => $employee, 'practice' => $practice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $practice = Practice::all();
        return view('admin.employee.create',[ 'practice' => $practice]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'email'
        ]);

        $employee = new Employee;

        $employee->first_name = $request->input('fname');
        $employee->last_name = $request->input('lname');
        $employee->practice_id = $request->input('practice');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $practice = Practice::all();
        return view('admin.employee.edit',[ 'employee' => $employee,'practice' => $practice]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'email'
        ]);

        

        $employee->first_name = $request->input('fname');
        $employee->last_name = $request->input('lname');
        $employee->practice_id = $request->input('practice');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return back();
    }
}
