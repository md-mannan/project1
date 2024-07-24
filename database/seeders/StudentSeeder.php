<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/students.json');
        $students = collect(json_decode($json));

        $students->each(function ($student) {
            Student::create([
                'name' => $student->name,
                'email' => $student->email,
                'age' => $student->age,
                'gender' => $student->gender,
                'country' => $student->country,
                'city' => $student->city,
                'address' => $student->address,
                'phone' => $student->phone,
            ]);
        });
    }
}
