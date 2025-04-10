<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RequirementController;
use App\Models\Admin\Requirement;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::any('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/cases', [CaseController::class, 'index'])->name('cases');

Route::get('/cases/{id}', [CaseController::class, 'show'])->name('cases-details');

Route::get('/cases-details-mock', function () {
    return view('cases-details');
})->name('cases-details-mock');

Route::get('/activity', [ActivityController::class, 'index'])->name('activity');

Route::get('/activity/{id}', [ActivityController::class, 'show'])->name('activity-details');

Route::get('/activity-details',function(){
    return view('activity-details');
})->name('activity-details-mock');

Route::get('/stores', function () {
    $seoInfo = SeoSettingRepository::getInfo('/stores');
    return view('stores')->with('seoInfo', $seoInfo);
})->name('stores');

Route::get('/contact', function () {
    $seoInfo = SeoSettingRepository::getInfo('/contact');
    return view('contact')->with('seoInfo', $seoInfo);
})->name('contact');

//需求表單頁面送出
Route::post('/requirement-form', [RequirementController::class, 'store'])->middleware('throttle:5,1')->name('requirements.store');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');


Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('seoSettings', App\Http\Controllers\Admin\SeoSettingController::class, ["as" => 'admin']);
        // Route::resource('marqueeInfos', App\Http\Controllers\Admin\MarqueeInfoController::class, ["as" => 'admin']);
        // Route::resource('newsInfos', App\Http\Controllers\Admin\NewsInfoController::class, ["as" => 'admin']);
        Route::resource('caseInfos', App\Http\Controllers\Admin\CaseInfoController::class, ["as" => 'admin']);
        Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class, ["as" => 'admin']);
        Route::resource('classifications', App\Http\Controllers\Admin\ClassificationController::class, ["as" => 'admin']);
        Route::resource('activityInfos', App\Http\Controllers\Admin\ActivityInfoController::class, ["as" => 'admin']);
        Route::resource('requirements', App\Http\Controllers\Admin\RequirementController::class, ["as" => 'admin']);

        // AJAX 預覽清洗結果的路由
        Route::post('/seo/preview', [App\Http\Controllers\Admin\SeoSettingController::class, 'preview'])->name('admin.seo.preview');

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});

// Route::resource('admin/activity-infos', App\Http\Controllers\Admin\ActivityInfoController::class)
//     ->names([
//         'index' => 'admin.activityInfos.index',
//         'store' => 'admin.activityInfos.store',
//         'show' => 'admin.activityInfos.show',
//         'update' => 'admin.activityInfos.update',
//         'destroy' => 'admin.activityInfos.destroy',
//         'create' => 'admin.activityInfos.create',
//         'edit' => 'admin.activityInfos.edit'
//     ]);

// Route::resource('admin/requirements', App\Http\Controllers\Admin\RequirementController::class)
//     ->names([
//         'index' => 'admin.requirements.index',
//         'store' => 'admin.requirements.store',
//         'show' => 'admin.requirements.show',
//         'update' => 'admin.requirements.update',
//         'destroy' => 'admin.requirements.destroy',
//         'create' => 'admin.requirements.create',
//         'edit' => 'admin.requirements.edit'
//     ]);
