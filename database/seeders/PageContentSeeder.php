<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageContentSeeder extends Seeder
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
                "image_owner" => "assets/admin/images/owner.svg",
                "name_owner" => json_encode([
                    'ar' => 'محمد ممدوح',
                    'en' => 'Mohammed Mamdouh',
                ]),
                "email" => "mohammed.mamdouh@gmail.com",
                "phone" => "+9714523123156",
                "address" => "Dubai",
                "description_owner" => json_encode([
                    'ar' => 'وكيل عقارى معتمد مرخص من دائرة الاراضى والاملاك فى دبى مختص فى بيع وشراء وتأجير العقارات',
                    'en' => 'A certified real estate agent licensed by the Dubai Land Department, specialized in buying, selling and renting real estate',
                ]),
                "customers" => 50,
                "years_experience" => 50,
                "best_customers" => 50,
                "project_successfully" => 50,
                "image_description" => "owner.svg",
                "description_about" => json_encode([
                    'ar' => 'نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.',
                    'en' => 'We manage all administrative affairs related to signing new or renewing lease contracts by individual tenants or companies. We negotiate the price and lease contract with the tenants according to the terms previously agreed upon with the landlord. A specialized team also collects the rent and works with the company’s legal team to follow up on collecting the amounts. of defaulters; When needed, the legal team represents the landlord in resolving any problem or dispute related to government agencies such as the Rent Committee and Dubai Municipality.',
                ]),
                "facebook" => "https://www.facebook.com",
                "twitter" => "https://www.twitter.com",
                "linkedin" => "https://www.linkedin.com",
                "instagram" => "https://www.instagram.com",
                "tiktok" => "https://www.tiktok.com",
            ]
        ];
        DB::table('page_contents')->insert($data);
    }
}
