<?php

use Illuminate\Database\Seeder;
use Seeders\CompanySeeder;
use Seeders\EmployeeSeeder;
use Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
