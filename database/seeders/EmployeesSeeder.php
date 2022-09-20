<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
           [
            'name' => 'John Doe',
            'email' => 'jd@aaa.com',
           ],
           [
            'name' => 'Jane Doe',
            'email' => '',
           ],
           [
            'name' => 'John Doe',
            'email' => 'jd@aaa.com',
            ]
        ]);
    }
}
