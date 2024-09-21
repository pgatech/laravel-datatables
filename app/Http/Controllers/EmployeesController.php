<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeesDataTable;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(EmployeesDataTable $dataTable)
    {
        return $dataTable->render('employees.index');
    }
}
