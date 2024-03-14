<?php

namespace Database\Seeders;

use App\Models\ContactInformation;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed students
        Student::factory(10)->create();

        // Seed teachers
        Teacher::factory(5)->create();

        // Seed courses with associated teacher
        Course::factory(10)->create()->each(function ($course) {
            $course->teacher_id = Teacher::all()->random()->id;
            $course->save();
        });

        // Seed contact informations for students
        ContactInformation::factory(20)->create();

        // Seed student-course relationships
        $students = Student::all();
        Course::all()->each(function ($course) use ($students) {
            $course->students()->attach(
                $students->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
