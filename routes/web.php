<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('index');
})->name('index');

//logging in as Admin or Users (Click the login button)
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

//show ADD BLOG in Client (click the name on the menu when the user successfuly logged in)
Route::middleware(['auth:sanctum', 'verified'])->get('/Profile/{id}', [MainController::class,'showAddBlogClient'])->name('profile');

// display Blog list in the Blog page (click the blog button on the menu)
Route::get('Blog', [MainController::class,'displayBlog'])->name('blog');



// adding BLOG in the database (CLIENT) (clicking the submit botton of the form in the Profile - Adding/updating a blog)
Route::post('addBlogFormClient', [BlogController::class,'addBlogFormClient'])->name('addBlogFormClient');

//  DELETE Blog in the database(CLIENT) (click the X button in the table at the user's Profile - Deleting blog)
Route::get('deleteBlogClient/{id}', [BlogController::class,'deleteBlogClient'])->name('deleteBlogClient');

//show ADD BLOG in ADMIN (clicking the add blog in the admin panel)
Route::get('AddBlog', [MainController::class,'showAddBlog'])->name('addBlog');

// adding BLOG in the database (ADMIN) (clicking the submit botton of the form in the Admin - Adding/updating a blog)
Route::post('addBlogForm', [BlogController::class,'addBlogForm'])->name('addBlogForm');

//  DELETE Blog in the database(ADMIN) (click the X button in the table at the user's Admin - Deleting blog)
Route::get('deleteBlog/{id}', [BlogController::class,'deleteBlog'])->name('deleteBlog');

// DISPLAY the data in the form when click the row of the table for updating (ADMIN/profile)
Route::get('displayInEditForm/{id}', [BlogController::class,'displayInEditForm'])->name('displayInEditForm');

// view the selected blog (clicking the a blog in the lists of blog page)
Route::get('BlogView/{id}', [BlogController::class,'BlogView'])->name('BlogView');






//This code is for avoiding the users view the files of  the website.
Route::get('/{slug}', function () {
    return view('index');
});
