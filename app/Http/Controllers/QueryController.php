<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{

    public function companies()
    {
        $companies = Company::has('employees')
            ->with([
                'employees' => (function ($query) { $query->whereActive(1); })
            ])->get();

        $companies2 = Company::whereHas('employees', function ($query) { $query->whereActive(1); })
            ->with('employees')
            ->get();
        // $query = 'SELECT * FROM companies WHERE companies.id IN (SELECT company_id FROM employees WHERE active = 1)';
        // $result = DB::select($query);
        // $result = Company::with('companies')->hydrate($result);

        $companiesFinal = Company::with([
            'employees' => (function ($query) {
                $query->whereActive(1);
            })
        ])->whereHas('employees', function ($query) {
            $query->whereActive(1);
        })->get();

            dump('Todas las empresas y sus empleados activos, o ninguno sino hay empleados activos');
            dump($companies->pluck('name'), $companies->pluck('employees'));

            dump('Todas las empresas con empleados activos y sus empleados (activos e inactivos)');
            dump($companies2->pluck('name'), $companies2->pluck('employees'));

            dump('Todas las empresas con empleados activos y sus empleados (solo activos)');
            dump($companiesFinal->pluck('name'), $companiesFinal->pluck('employees'));

        $x = Company::with([
            'employees' => (function ($query) {
                $query->whereActive(1);
            })
        ])->whereHas('employees', function ($query) {
            $query->whereActive(1);
        })->get();
    }
}
// SELECT * FROM companies, employees
// HAVING companies.id IN (SELECT company_id FROM employees WHERE active = 1)
// AND employees.active = 1
// ORDER BY companies.name, employees.company_id
