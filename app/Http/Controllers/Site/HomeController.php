<?php

namespace App\Http\Controllers\Site;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;

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
        $projects = DB::table('projects')->select('id', 'images', 'title', 'classification', 'description')->get();
        return $projects;
    }

    public function storeContact(ContactStoreRequest $request)
    {
        // Create a new Contact model instance
        $contact = new Contact();
        
        // Set the model properties with the form data
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        // Save the model to the database
        $contact->save();

        return redirect('/site');
    }
}
