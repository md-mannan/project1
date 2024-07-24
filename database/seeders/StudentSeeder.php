<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect([
            [
                "name" => "Mohammad Abdul Mannan",
                "email" => "mdmannan@gmail.com",
                "age" => 27,
                "gender" => "Male",
                "country" => "Bangladesh",
                "city" => "Comilla",
                "address" => "Monohorgonj,Comilla",
                "phone" => "50923840",
            ],
            [
                "name" => "Ravi Raj",
                "email" => "ravi@gmail.com",
                "age" => 28,
                "gender" => "Male",
                "country" => "India",
                "city" => "Delhi",
                "address" => "Delhi,india",
                "phone" => "965546885",
            ]
        ]);

        $students->each(function ($student) {
            Student::create($student);
        });
    }
}
