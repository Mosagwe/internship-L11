<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\Contract;
use App\Models\Employee;
use App\Models\Station;
use App\Models\Unit;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date=$this->faker->dateTimeThisYear($max='now',$timezone = 'Africa/Nairobi');
        $end_date=Carbon::parse($start_date)->addMonths(3)->format('Y-m-d');
        return [
            'employee_id'=>$this->faker->unique()->numberBetween(1,Employee::count()),
            'start_date'=>$start_date,
            'end_date'=>$end_date,
            'status'=>$this->faker->boolean,
            'station_id'=>Station::all()->random()->id,
            'unit_id'=>Unit::all()->random()->id,
            'employee_type_id'=>1,
        ];
    }
}
