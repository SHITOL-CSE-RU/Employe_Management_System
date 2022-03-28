<?php

namespace Database\Seeders;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
          'name' => Str::random(10),
          'job_title' => Str::random(10),
          'joining_date' => Carbon::now()->format('Y-m-d'),
          'salary' => 22100.00,
          'email' => Str::random(10).'@gmail.com',
          'mobile_no' => "123456789",
          'address' => Str::random(50)
        ]);
    }
}
