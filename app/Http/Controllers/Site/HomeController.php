<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Json;

class HomeController extends Controller
{
    public function showPortfolio()
    {
        $landingPageData = $this->getLandingPageData();
        $services = $this->getServiceData();
        $projects = $this->getProjectData();
        return view('site.layout', compact('landingPageData', 'services', 'projects'));
    }

    private function getLandingPageData()
    {
        $information = DB::table('page_contents')
            ->select('id', 'image_owner', 'name_owner', 'email', 'phone', 'address', 'description_owner', 'customers', 'years_experience', 'best_customers', 'project_successfully', 'description_about', 'image_description')
            ->first();

        return $information;
    }

    private function getServiceData()
    {
        $services = DB::table('services')->select('icon', 'title', 'description')->get();
        return $services;
    }

    private function getProjectData()
    {
        $projects = DB::table('projects')->select('id', 'image', 'title', 'classification')->get();
        return $projects;
    }
}
