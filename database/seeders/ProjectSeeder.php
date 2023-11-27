<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "image" => "project1.jpg",
                "title" => json_encode([
                    'ar' => 'مشروع 1',
                    'en' => 'Project 1',
                ]),
                "classification" => json_encode([
                    'ar' => 'تصنيف 1',
                    'en' => 'Classification 1',
                ]),
            ],
            [
                "image" => "project2.jpg",
                "title" => json_encode([
                    'ar' => 'مشروع 2',
                    'en' => 'Project 2',
                ]),
                "classification" => json_encode([
                    'ar' => 'تصنيف 2',
                    'en' => 'Classification 2',
                ]),
            ],
            [
                "image" => "project3.jpg",
                "title" => json_encode([
                    'ar' => 'مشروع 3',
                    'en' => 'Project 3',
                ]),
                "classification" => json_encode([
                    'ar' => 'تصنيف 3',
                    'en' => 'Classification 3',
                ]),
            ],
            [
                "image" => "project4.jpg",
                "title" => json_encode([
                    'ar' => 'مشروع 4',
                    'en' => 'Project 4',
                ]),
                "classification" => json_encode([
                    'ar' => 'تصنيف 4',
                    'en' => 'Classification 4',
                ]),
            ],
        ];
        DB::table('projects')->insert($data);
    }
}
