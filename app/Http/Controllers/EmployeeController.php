<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Http\Requests\EmployeeRequest;
use App\Http\Resources\EmployeeResource;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::paginate(2);
        return EmployeeResource::collection($employees);
    }

    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create($request->validated());
        $departments = Department::find($employee->departments);
        $employee->departments()->attach($departments);
        return response()->json(['status' => '200', 'message' => 'Сотрудник успешно добавлен']);
    }

    public function update(EmployeeRequest $request)
    {
        var_dump('метод обновления сотрудника');
    }

    public function delete()
    {
        var_dump('метод удаления сотрудника');
    }

}
