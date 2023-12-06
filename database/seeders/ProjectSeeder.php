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
                "images" => json_encode([
                    'image1' => '1.jpeg',
                    'image2' => '2.jpeg',
                    'image3' => '3.jpeg',
                ]),
                "title" => json_encode([
                    'ar' => 'مشروع 1',
                    'en' => 'Project 1',
                ]),
                "classification" => json_encode([
                    'ar' => 'تصنيف 1',
                    'en' => 'Classification 1',
                ]),
                "description" => json_encode([
                    'ar' => 'Anim minim eu nisi aliquip adipisicing ullamco et minim enim minim deserunt reprehenderit.',
                    'en' => 'Do sunt deserunt cupidatat ea excepteur est dolor amet incididunt.',
                ]),
            ],
            [
                "images" => json_encode([
                    'image1' => '1.jpeg',
                    'image2' => '2.jpeg',
                    'image3' => '3.jpeg',
                ]),
                "title" => json_encode([
                    'ar' => 'مشروع 1',
                    'en' => 'Project 1',
                ]),
                "classification" => json_encode([
                    'ar' => 'تصنيف 2',
                    'en' => 'Classification 2',
                ]),
                "description" => json_encode([
                    'ar' => 'Anim minim eu nisi aliquip adipisicing ullamco et minim enim minim deserunt reprehenderit.',
                    'en' => 'Do sunt deserunt cupidatat ea excepteur est dolor amet incididunt.',
                ]),
            ],
            [
                "images" => json_encode([
                    'image1' => '1.jpeg',
                    'image2' => '2.jpeg',
                    'image3' => '3.jpeg',
                ]),
                "title" => json_encode([
                    'ar' => 'مشروع 1',
                    'en' => 'Project 1',
                ]),
                "classification" => json_encode([
                    'ar' => 'تصنيف 3',
                    'en' => 'Classification 3',
                ]),
                "description" => json_encode([
                    'ar' => 'Anim minim eu nisi aliquip adipisicing ullamco et minim enim minim deserunt reprehenderit.',
                    'en' => 'Do sunt deserunt cupidatat ea excepteur est dolor amet incididunt.',
                ]),
            ],
            [
                "images" => json_encode([
                    'image1' => '1.jpeg',
                    'image2' => '2.jpeg',
                    'image3' => '3.jpeg',
                ]),
                "title" => json_encode([
                    'ar' => 'مشروع 1',
                    'en' => 'Project 1',
                ]),
                "classification" => json_encode([
                    'ar' => 'تصنيف 4',
                    'en' => 'Classification 4',
                ]),
                "description" => json_encode([
                    'ar' => 'Anim minim eu nisi aliquip adipisicing ullamco et minim enim minim deserunt reprehenderit.',
                    'en' => 'Do sunt deserunt cupidatat ea excepteur est dolor amet incididunt.',
                ]),
            ],
        ];
        DB::table('projects')->insert($data);
    }
}
