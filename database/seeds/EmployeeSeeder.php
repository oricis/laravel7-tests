<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->name = 'Foo';
        $employee->company_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Baz';
        $employee->company_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Bar';
        $employee->company_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Qux';
        $employee->active = 0;
        $employee->company_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Quux';
        $employee->active = 0;
        $employee->company_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Quuz';
        $employee->company_id = 1;
        $employee->save();

        ////////////////////////////////////////////////////////////////

        $employee = new Employee();
        $employee->name = 'John Doe';
        $employee->active = 0;
        $employee->company_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Corge';
        $employee->company_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Grault';
        $employee->company_id = 1;
        $employee->save();

        ////////////////////////////////////////////////////////////////

        $employee = new Employee();
        $employee->name = 'Waldo';
        $employee->company_id = 1;
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Fred';
        $employee->company_id = 1;
        $employee->save();
    }
}
