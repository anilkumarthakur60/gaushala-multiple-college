<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $courses = [
            [
                'name' => 'Web Development',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'web-development',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'Web Design',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'web-design',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'mobile-app-development',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'Digital Marketing',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'digital-marketing',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'SEO',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'seo',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'UI/UX Design',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'ui-ux-design',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'Graphic Design',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'graphic-design',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'Video Editing',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'video-editing',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'Motion Graphics',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'motion-graphics',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'Content Writing',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'content-writing',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => 'Game Development',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => 'game-development',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],
            [
                'name' => '3D Design',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'slug' => '3d-design',
                'students' => '50',
                'hours' => '01h 30m',
                'rating' => '4.5',
            ],

        ];

        foreach ($courses as $course) {
            Course::query()->firstOrCreate(
                ['name' => $course['name']],
                [
                    'description' => $course['description'],
                    'slug' => $course['slug'],
                    'students' => $course['students'],
                    'hours' => $course['hours'],
                    'rating' => $course['rating'],
                ]
            );
        }

    }
}
