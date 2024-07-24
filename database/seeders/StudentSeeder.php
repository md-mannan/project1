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


        for ($i = 1; $i <= 10; $i++) {
            Student::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email(),
                'age' => fake()->numberBetween(18, 30),
                'gender' => fake()->randomElement(['Male', 'Female']),
                'country' => fake()->country(),
                'city' => fake()->city(),
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
            ]);
        }
    }
}
