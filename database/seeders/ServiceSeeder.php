<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
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
                "icon" => "fa-building",
                "title" => json_encode([
                    'ar' => 'شركة التداول العالمية',
                    'en' => 'Global Trading Company',
                ]),
                "description" => json_encode([
                    'ar' => 'نحن شركة رائدة في مجال التداول عبر الأسواق العالمية.',
                    'en' => 'We are a leading company in global trading markets.',
                ]),
            ],
            [
                "icon" => "fa-users",
                "title" => json_encode([
                    'ar' => 'خدمات التداول للعملاء',
                    'en' => 'Trading Services for Clients',
                ]),
                "description" => json_encode([
                    'ar' => 'نقدم خدمات التداول عالية الجودة لعملائنا الكرام.',
                    'en' => 'We provide high-quality trading services for our valued clients.',
                ]),
            ],
            [
                "icon" => "fa-coins",
                "title" => json_encode([
                    'ar' => 'تداول العملات',
                    'en' => 'Currency Trading',
                ]),
                "description" => json_encode([
                    'ar' => 'نقدم خدمات تداول العملات بشكل محترف وآمن.',
                    'en' => 'Professional and secure currency trading services.',
                ]),
            ],
            [
                "icon" => "fa-chart-bar",
                "title" => json_encode([
                    'ar' => 'تحليل السوق',
                    'en' => 'Market Analysis',
                ]),
                "description" => json_encode([
                    'ar' => 'نقوم بتحليل السوق بدقة لدعم قرارات التداول.',
                    'en' => 'Precise market analysis to support trading decisions.',
                ]),
            ],
        ];
        DB::table('services')->insert($data);
    }
}
