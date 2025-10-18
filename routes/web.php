<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Reserved;
use App\Http\Controllers\Open;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Open\HomeController::class, 'home'])->name('home');
Route::get('about', [Open\HomeController::class, 'about'])->name('about');
Route::get('gallery', [Open\HomeController::class, 'gallery'])->name('gallery');
Route::get('contact', [Open\HomeController::class, 'contact'])->name('contact');
Route::get('projects{id?}', [Open\HomeController::class, 'projects'])->name('projects');
Route::get('events{id?}', [Open\HomeController::class, 'events'])->name('events');
Route::get('donate', [Open\HomeController::class, 'make_donation'])->name('donate');
Route::post('donate', [Open\HomeController::class, 'donate']);
Route::post('donation_return', [Open\HomeController::class, 'donation_return'])->name('donation.return_url');
Route::get('blog{id?}', [Open\HomeController::class, 'blog'])->name('blog');
Route::post('mail', [Open\HomeController::class, 'email'])->name('email');

Route::get('login', [Controller::class, 'login_form'])->name('login');
Route::post('login', [Controller::class, 'login']);
Route::get('logout', [Controller::class, 'logout'])->name('logout');

Route::prefix('reserved')->name('reserved.')->middleware('reserved')->group(function(){
    Route::get('', [Reserved\HomeController::class, 'home'])->name('home');

    Route::get('category{id}blog', [Reserved\HomeController::class, 'category_posts'])->name('category.posts');
    Route::get('categories{id?}', [Reserved\HomeController::class, 'categories'])->name('categories');
    Route::post('categories{id?}', [Reserved\HomeController::class, 'save_category']);
    Route::get('delete_category{id}', [Reserved\HomeController::class, 'delete_category'])->name('categories.delete');

    Route::get('blog{id?}', [Reserved\BlogController::class, 'blog'])->name('blog');
    Route::get('create_post{id?}', [Reserved\BlogController::class, 'create_blog'])->name('blog.create');
    Route::get('publishing{id}', [Reserved\BlogController::class, 'toggle_publishing'])->name('blog.publish');
    Route::post('create_post{id?}', [Reserved\BlogController::class, 'save_blog']);
    Route::get('delete_post{id}', [Reserved\BlogController::class, 'delete_blog'])->name('blog.delete');

    Route::get('projects{id?}', [Reserved\ProjectController::class, 'projects'])->name('projects');
    Route::get('create_project{id?}', [Reserved\ProjectController::class, 'create_project'])->name('projects.create');
    Route::post('create_project{id?}', [Reserved\ProjectController::class, 'save_project']);
    Route::get('delete_project{id}', [Reserved\ProjectController::class, 'delete_project'])->name('projects.delete');
    Route::get('project{id}events', [Reserved\ProjectController::class, 'project_events'])->name('projects.events');

    Route::get('events{id?}', [Reserved\EventController::class, 'events'])->name('events');
    Route::get('create_event{id?}', [Reserved\EventController::class, 'create_event'])->name('events.create');
    Route::post('create_event{id?}', [Reserved\EventController::class, 'save_event']);
    Route::get('delete_event{id}', [Reserved\EventController::class, 'delete_event'])->name('events.delete');
    
});


Route::get('php_artisan', function(){
    return view('public.artisan');
});
Route::post('php_artisan', function(Request $request){
    try {
        //code...
        $command = $request->command;
        $exec = new Process([$command]);
        $exec->setWorkingDirectory(base_path());
        $exec->run();
        return ["Output: "=> $exec->getOutput(), " Error Output: "=> $exec->getErrorOutput()];
    } catch (\Throwable $th) {
        throw $th;
    }
});