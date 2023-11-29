<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\{
    serviceStoreRequest,
    serviceUpdateRequest
};
use App\Models\Service;
use Illuminate\Http\{
    JsonResponse,
    Request
};
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    // Function to fetch and display service data in a Blade view
    public function showServices(Request $request)
    {
        if ($request->ajax()) {
            return $this->getServicesData();
        } else {
            return view('admin.services.index');
        }
    }

    // Private function to retrieve services data from the database for DataTables
    private function getServicesData()
    {
        $services = Service::query()->select('id', 'icon', 'title', 'description')->get();
        return DataTables::of($services)
            ->addColumn('action', function ($services) {
                return $this->generateActionButtons($services);
            })
            ->editColumn('icon', function ($services) {
                return '
                <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset($services->logo) . '">
                ';
            })
            ->editColumn('title', function ($services) {
                $json = json_decode($services->title, true);
                return $json["ar"];
            })
            ->editColumn('description', function ($services) {
                $json = json_decode($services->description, true);
                return $json["ar"];
            })
            ->escapeColumns([])
            ->make(true);
    }

    // Private function to generate a delete button for service records
    private function generateActionButtons($services)
    {
        return '
        <button type="button" data-id="' . $services->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
        <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                data-id="' . $services->id . '" data-title="' . $services->title . '">
                <i class="fas fa-trash"></i>
        </button>
    ';
    }

    public function showCreate()
    {
        return view('admin.services.parts.create');
    }

    public function storeService(ServiceStoreRequest $request)
    {
        try {
            $serviceData = $this->processServiceData($request);

            $service = Service::create($serviceData);

            return response()->json(['status' => $service ? 200 : 405]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()]);
        }
    }

    private function processServiceData(ServiceStoreRequest $request): array
    {
        $data = $request->only(['title', 'description']); // Adjust the fields accordingly

        if ($request->hasFile('icon')) {
            $imagePath = $request->file('icon')->store('uploads/services', 'public');
            $data['icon'] = $imagePath;
        }

        return $data;
    }

    public function showEdit(Request $request)
    {
        $services = Service::find($request->id);
        return view('admin.services.parts.edit', compact('services'));
    }

    public function updateService(serviceUpdateRequest $request, $id): JsonResponse
    {
        try {
            $inputs = $request->except('id');

            $service = Service::findOrFail($id);

            $this->handleIconUpload($request, $inputs);

            if ($this->updateServiceAttributes($service, $inputs)) {
                return response()->json(['status' => 200]);
            }

            return response()->json(['status' => 405]);
        } catch (\Exception $e) {
            // Handle exceptions appropriately (e.g., log or return an error response)
            return response()->json(['status' => 500, 'error' => $e->getMessage()]);
        }
    }

    private function handleIconUpload($request, &$inputs)
    {
        if ($request->hasFile('icon')) {
            $imagePath = $request->file('icon')->store('uploads/settings', 'public');
            $inputs['icon'] = $imagePath;
        } else {
            unset($inputs['icon']);
        }
    }

    private function updateServiceAttributes($service, $inputs)
    {
        return $service->update($inputs);
    }

    public function deleteService(Request $request)
    {
        try {
            $service = $this->findService($request);

            if (!$service) {
                return response(['message' => 'الجهة غير موجودة', 'status' => 404], 404);
            }

            $service->delete();

            return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
        } catch (\Exception $e) {
            return response(['message' => 'حدث خطأ أثناء الحذف', 'status' => 500], 500);
        }
    }

    // Private function to find and return a service model by its id in the database
    private function findService(Request $request)
    {
        return Service::find($request->id);
    }
}
