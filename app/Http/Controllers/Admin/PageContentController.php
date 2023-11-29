<?php

namespace App\Http\Controllers\Admin;

use App\Models\PageContent;
use Illuminate\Http\{
    Request,
    JsonResponse
};
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateInformationRequest;

class PageContentController extends Controller
{
    public function showInformation(Request $request)
    {
        try {
            $informations = $this->getInformation();

            return view('admin.informations.index', compact('informations'));
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()]);
        }
    }

    private function getInformation(): PageContent
    {
        return PageContent::select(
            'id',
            'image_owner',
            'name_owner',
            'description_owner',
            'customers',
            'years_experience',
            'best_customers',
            'project_successfully',
            'image_description',
            'description_about'
        )->firstOrFail();
    }

    public function updateInformation(UpdateInformationRequest $request, $id): JsonResponse
    {
        try {
            $inputs = $request->except('id');

            $information = PageContent::findOrFail($id);

            $this->updateImage($request, $inputs);

            $this->updateInformationFields($information, $inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405, 'error' => $e->getMessage()]);
        }
    }

    private function updateImage(UpdateInformationRequest $request, array &$inputs): void
    {
        if ($request->hasFile('image_owner')) {
            $imagePath = $request->file('image_owner')->store('uploads/page_content', 'public');
            $inputs['image_owner'] = $imagePath;
        } else {
            unset($inputs['image_owner']);
        }

        if ($request->hasFile('image_description')) {
            $imagePath = $request->file('image_description')->store('uploads/page_content', 'public');
            $inputs['image_description'] = $imagePath;
        } else {
            unset($inputs['image_description']);
        }
    }

    private function updateInformationFields(PageContent $information, array $inputs): void
    {
        $information->update($inputs);
    }
}
