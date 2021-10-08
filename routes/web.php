<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ReporterComponent;
use App\Http\Livewire\WebnewsComponent;
use App\Http\Livewire\VideonewsComponent;
use App\Http\Livewire\ContactusComponent;
use App\Http\Livewire\SingleNewsComponent;
use App\Http\Livewire\AdmindashboardComponent;
use App\Http\Livewire\ReporterInfComponent;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//--------------Liveware Component----------------
Route::get('/',HomeComponent::class)->name('home');
Route::get('/about',AboutComponent::class)->name('about');
Route::get('/reporter',ReporterComponent::class)->name('reporter');
Route::get('/webnews',WebnewsComponent::class)->name('webnews');
Route::get('/videonews',VideonewsComponent::class)->name('videonews');
Route::get('/contactus',ContactusComponent::class)->name('contactus');
Route::get('/singlenews',SinglenewsComponent::class)->name('singlenews');

//Middleware
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    
    Route::get('admin/dashboard',[NewsController::class,'baseadmin1'])->name('admin.dashboard');
    //Route::get('/baseadmin1',[NewsController::class,'baseadmin1']);
    //--------------Flash News Section Route:-------------------------
    Route::get('/addflash1',[NewsController::class,'addflash1'])->name('admin.addflash1');
    Route::post('admin/add',[NewsController::class,'add'])->name('admin.add');
    Route::get('admin/viewflash',[NewsController::class,'viewflashnews'])->name('admin.viewflash');
    Route::get('admin/editflash/{id}',[NewsController::class,'editflash'])->name('admin.editflash');
    Route::post('admin/updateflash',[NewsController::class,'editflashnews'])->name('admin.updateflash');
    Route::get('admin/deleteflash/{id}',[NewsController::class,'deleteflashnews'])->name('admin.deleteflash');
    //---------------End Flash News-----------------------------
    
    //------------------Web News Section---------------------
    Route::get('admin/addwebnews1',[NewsController::class,'addwebnews1'])->name('admin.addwebnews1');
    Route::post('admin/postwebnews',[NewsController::class,'postwebnews'])->name('admin/postwebnews');
    Route::get('admin/viewweb',[NewsController::class,'viewwebnews'])->name('admin.viewweb');
    Route::get('admin/editwebnews/{id}',[NewsController::class,'editwebnews'])->name('admin.editwebnews');
    Route::post('admin/updatewebnews',[NewsController::class,'updatewebnews'])->name('admin.updatewebnews');
    Route::get('admin/deletewebnews/{id}',[NewsController::class,'deletewebnews'])->name('admin.deletewebnews');
    //-----------------End Web News-------------------------------

    //------------------Video News Section-------------------
    Route::get('admin/addvideonews1',[NewsController::class,'addvideonews1'])->name('admin.addvideonews1');
    Route::post('admin/postvideonews',[NewsController::class,'postvideonews'])->name('admin/postvideonews');
    Route::get('admin/viewvideo',[NewsController::class,'viewvideonews'])->name('admin.viewvideo');
    Route::get('admin/editvideonews/{id}',[NewsController::class,'editvideonews'])->name('admin.editvideonews');
    Route::post('admin/updatevideonews',[NewsController::class,'updatevideonews'])->name('admin.updatevideonews');
    Route::get('admin/deletevideonews/{id}',[NewsController::class,'deletevideonews'])->name('admin.deletevideonews');
    //------------------End Video News---------------------------

    //------------------Reporter Section----------------------
    Route::get('admin/addreporter1',[NewsController::class,'addreporter1'])->name('admin.addreporter1');
    Route::post('admin/addreporter4',[NewsController::class,'add4'])->name('admin/addreporter4');
    Route::get('admin/viewreporter',[NewsController::class,'viewreporter'])->name('admin.viewreporter');
    Route::get('admin/editreporter/{id}',[NewsController::class,'editreporter'])->name('admin.editreporter');
    Route::post('admin/updatereporter',[NewsController::class,'updatereporter'])->name('admin.updatereporter');
    Route::get('admin/deletereporter/{id}',[NewsController::class,'deletereporter'])->name('admin.deletereporter');
    //------------------End Reporter---------------------------
    
    //------------Banner Section-----------------------------
    Route::get('admin/addbanner',[NewsController::class,'addbanner'])->name('admin.addbanner');
    Route::post('admin/postbanner',[NewsController::class,'postbanner'])->name('admin/postbanner');
    Route::get('admin/viewbanner',[NewsController::class,'viewbanner'])->name('admin.viewbanner');
    Route::get('admin/editbanner/{id}',[NewsController::class,'editbanner'])->name('admin.editbanner');
    Route::post('admin/updatebanner',[NewsController::class,'updatebanner'])->name('admin.updatebanner');
    Route::get('admin/deletebanner/{id}',[NewsController::class,'deletebanner'])->name('admin.deletebanner');
    //------------End Banner Section--------------------------

});
//For show single news
Route::get('/singlenews/{id}',[NewsController::class,"singlenews"]);

//For show reporter information
// Route::get('/reporterinf/{name}',[NewsController::class,"reporterinf"]);