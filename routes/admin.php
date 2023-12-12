<?php


use App\Http\Controllers\Admin\{
    AdminController,
    AuthController,
    ContactController,
    PageContentController,
    ProjectController,
    ServiceController
};
use Illuminate\Support\Facades\{
    Artisan,
    Route
};

Route::group(['prefix'=>'admin'],function (){
    Route::get('login', [AuthController::class,'index'])->name('admin.login');
    Route::POST('login', [AuthController::class,'login'])->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/', function () {
        return view('admin/index');
    })->name('adminHome');

    #============================ Admin ====================================
    Route::resource('admins', AdminController::class);
    Route::POST('delete_admin',[AdminController::class,'delete'])->name('delete_admin');
    Route::get('my_profile',[AdminController::class,'myProfile'])->name('myProfile');
    Route::get('logout', [AuthController::class,'logout'])->name('admin.logout');

    #============================ My Information ====================================
    Route::get('my_information', [PageContentController::class, 'showInformation'])->name('showInformation');
    Route::post('update/information/{id}', [PageContentController::class, 'updateInformation'])->name('updateInformation');

    #============================ Contact ====================================
    Route::get('contacts', [ContactController::class, 'showContacts'])->name('contacts.index');
    Route::post('delete/contact', [ContactController::class, 'deleteContact'])->name('contacts.delete');

    #============================ Services ====================================
    Route::get('services', [ServiceController::class, 'showServices'])->name('services.index');
    Route::get('service/create', [ServiceController::class, 'showCreate'])->name('services.create');
    Route::post('service/store', [ServiceController::class, 'storeService'])->name('services.store');
    Route::get('service/{id}/edit', [ServiceController::class, 'showEdit'])->name('services.edit');
    Route::put('service/{id}/update', [ServiceController::class, 'updateService'])->name('services.update');
    Route::post('service/delete', [ServiceController::class, 'deleteService'])->name('services.delete');

    #============================ Projects ====================================
    Route::get('projects', [ProjectController::class, 'showProjects'])->name('projects.index');
    Route::get('project/create', [ProjectController::class, 'showCreate'])->name('projects.create');
    Route::post('project/store', [ProjectController::class, 'storeProject'])->name('projects.store');
    Route::get('project/{id}/edit', [ProjectController::class, 'showEdit'])->name('projects.edit');
    Route::put('project/{id}/update', [ProjectController::class, 'updateProject'])->name('projects.update');
    Route::post('project/delete', [ProjectController::class, 'deleteProject'])->name('projects.delete');
});




#=======================================================================
#============================ ROOT =====================================
#=======================================================================
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('key:generate');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    Artisan::call('storage:link');
    return response()->json(['status' => 'success','code' =>1000000000]);
});









