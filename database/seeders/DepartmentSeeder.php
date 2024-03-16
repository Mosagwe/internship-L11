<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments=[
            ['id'=>1,'name'=>'ICT'],
            ['id'=>2,'name'=>'Marketing and Communication'],
            ['id'=>3,'name'=>'Program Management Division'],
            ['id'=>4,'name'=>'Operations'],
            ['id'=>5,'name'=>'Office of the Secretary'],
        ];

        foreach ($departments as $department){
            Department::updateOrCreate(['id'=>$department['id']],$department);
        }
    }
}
