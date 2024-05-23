<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployController extends Controller
{
    public function index(){
        $employees = Employee::all();

        return view('employ.index', compact('employees'));
    }

    public function store(Request $request)
    {
        $this->validateInput($request);

        $keys = ['first_name', 'last_name', 'dob', 'phone'];
        $input = $this->createQueryInput($keys, $request);

        Employee::create($input);

        return redirect()->route('employ.index');
    }

    public function edit($id)
    {        
        $employee = Employee::findOrFail($id);

        return view('employ.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $this->validateInput($request);

        $employee = Employee::findOrFail($id);

        $keys = ['first_name', 'last_name', 'dob', 'phone'];
        $input = $this->createQueryInput($keys, $request);

        $employee->update($input);

        return redirect()->route('employ.index');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        return redirect()->route('employ.index');
    }

    protected function validateInput(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone' => 'required|string|max:15',
        ]);
    }
    protected function createQueryInput(array $keys, Request $request)
    {
        return $request->only($keys);
    }
}