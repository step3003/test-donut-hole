<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::withCount('employees')->withMax('employees', 'salary')->paginate(2);
        return $departments;
    }

    public function store(Request $request)
    {
        $department = Department::create($request->all());
        return $department;
    }

    public function update()
    {
        var_dump('метод обновления сотрудника');
    }

    public function delete()
    {
        var_dump('метод удаления сотрудника');
    }
}
