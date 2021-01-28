<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();
        $company->name = 'ACME';
        $company->save();

        $company = new Company();
        $company->name = 'Xfr';
        $company->save();

        $company = new Company();
        $company->name = 'Linux Inc';
        $company->save();
    }
}
