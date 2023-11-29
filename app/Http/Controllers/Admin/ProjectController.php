<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\{
    ProjectStoreRequest,
    ProjectUpdateRequest
};
use App\Models\Project;
use Illuminate\Http\{
    JsonResponse,
    Request
};
use Yajra\DataTables\DataTables;

class ProjectController extends Controller
{

    public function showProjects(Request $request)
    {
        if ($request->ajax()) {
            return $this->getProjectsData();
        } else {
            return view('admin.projects.index');
        }
    }

    // Private function to retrieve services data from the database for DataTables
    private function getProjectsData()
    {
        $projects = Project::query()->select('id', 'image', 'title', 'classification')->get();
        return DataTables::of($projects)
            ->addColumn('action', function ($projects) {
                return $this->generateActionButtons($projects);
            })
            ->editColumn('image', function ($projects) {
                return '
                <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset('storage/' . $projects->image) . '">
                ';
            })
            ->editColumn('title', function ($projects) {
                $json = json_decode($projects->title, true);
                return $json["ar"];
            })
            ->editColumn('classification', function ($projects) {
                $json = json_decode($projects->classification, true);
                return $json["ar"];
            })
            ->escapeColumns([])
            ->make(true);
    }

    // Private function to generate a delete button for service records
    private function generateActionButtons($projects)
    {
        return '
        <button type="button" data-id="' . $projects->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
        <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                data-id="' . $projects->id . '" data-title="' . $projects->title . '">
                <i class="fas fa-trash"></i>
        </button>
    ';
    }

    public function showCreate()
    {
        return view('admin.projects.parts.create');
    }

    public function storeProject(ProjectStoreRequest $request)
    {
        try {
            $projectData = $this->processProjectData($request);
            // dd($projectData);
            $project = Project::create($projectData);

            return response()->json(['status' => $project ? 200 : 405]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()]);
        }
    }

    private function processProjectData(ProjectStoreRequest $request): array
    {
        $data = $request->only(['title', 'classification']);
        $data['title'] = json_encode($request->title);
        $data['classification'] = json_encode($request->classification);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/projects', 'public');
            $data['image'] = $imagePath;
        }

        return $data;
    }

    public function showEdit(Request $request)
    {
        $projects = Project::find($request->id);
        return view('admin.projects.parts.edit', compact('projects'));
    }

    public function updateProject(ProjectUpdateRequest $request, $id): JsonResponse
    {
        try {
            $inputs = $request->except('id');

            $project = Project::findOrFail($id);

            $this->handleImageUpload($request, $inputs);

            if ($this->updateProjectAttributes($project, $inputs)) {
                return response()->json(['status' => 200]);
            }
            return response()->json(['status' => 405]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()]);
        }
    }

    private function handleImageUpload($request, &$inputs)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/projects', 'public');
            $inputs['image'] = $imagePath;
        } else {
            unset($inputs['image']);
        }
    }

    private function updateProjectAttributes($project, $inputs)
    {
        return $project->update($inputs);
    }

    public function deleteProject(Request $request)
    {
        try {
            $project = $this->findProject($request);

            if (!$project) {
                return response(['message' => 'الجهة غير موجودة', 'status' => 404], 404);
            }

            $project->delete();

            return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
        } catch (\Exception $e) {
            return response(['message' => 'حدث خطأ أثناء الحذف', 'status' => 500], 500);
        }
    }

    // Private function to find and return a service model by its id in the database
    private function findProject(Request $request)
    {
        return Project::find($request->id);
    }
}
