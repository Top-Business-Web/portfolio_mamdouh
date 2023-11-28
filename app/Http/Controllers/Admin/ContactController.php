<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContactController extends Controller
{
    // Function to fetch and display contact data in a Blade view
    public function showContacts(Request $request)
    {
        if ($request->ajax()) {
            return $this->getContactsData();
        } else {
            return view('admin.contacts.index');
        }
    }

    // Private function to retrieve contact data from the database for DataTables
    private function getContactsData()
    {
        $contacts = Contact::query()->select('id', 'name', 'email', 'subject', 'message')->get();
        return DataTables::of($contacts)
            ->addColumn('action', function ($contact) {
                return $this->generateActionButtons($contact);
            })
            ->escapeColumns([])
            ->make(true);
    }

    // Private function to generate a delete button for contact records
    private function generateActionButtons($contact)
    {
        return '
        <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                data-id="' . $contact->id . '" data-title="' . $contact->name . '">
                <i class="fas fa-trash"></i>
        </button>
    ';
    }

    // get id from function findContact and pass here to deleted
    public function deleteContact(Request $request)
    {
        try {
            $contact = $this->findContact($request);

            if (!$contact) {
                return response(['message' => 'الجهة غير موجودة', 'status' => 404], 404);
            }

            $contact->delete();

            return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
        } catch (\Exception $e) {
            return response(['message' => 'حدث خطأ أثناء الحذف', 'status' => 500], 500);
        }
    }

    // Private function to find and return a Contact model by its id in the database
    private function findContact(Request $request)
    {
        return Contact::find($request->id);
    }
}
