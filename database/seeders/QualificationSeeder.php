<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qualification;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualifications=[
            ['id'=>1,'name'=>'Phd'],
            ['id'=>2,'name'=>'Masters'],
            ['id'=>3,'name'=>'Degree'],
            ['id'=>4,'name'=>'Diploma'],
            ['id'=>5,'name'=>'Certificate'],
            ['id'=>6,'name'=>'Others'],
        ];

        foreach ($qualifications as $qualification){
            Qualification::updateOrCreate(['id'=>$qualification['id']],$qualification);
        }
    }
}
