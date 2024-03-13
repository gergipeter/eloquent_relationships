<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $startDate = $this->faker->dateTimeBetween('-1 year', 'now');
        $endDate = $this->faker->dateTimeBetween($startDate, '+1 year');

        $courses = ['HTML', 'CSS', 'JavaScript', 'React', 'Angular', 'Vue.js',
                        'Node.js', 'Express.js', 'MongoDB', 'MySQL', 'PHP', 'Laravel',
                        'Symfony', 'Ruby', 'Ruby on Rails', 'Python', 'Django', 'Flask',
                        'Java', 'Spring', 'Kotlin', 'Swift', 'iOS Development',
                        'Android Development'];

        $courseDescription = $this->faker->randomElement($courses);

        return [
            'name' => $this->faker->randomElement($courses) . ' Course',
            'description' => 'This course covers ' . $courseDescription . ' and related technologies. Students will learn the fundamentals and best practices of ' . $courseDescription . ' development.',
            'teacher_id' => Teacher::factory(),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'price' => $this->faker->randomFloat(2, 50, 500) - 0.01,
        ];
    }
}
