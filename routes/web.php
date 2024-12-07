<?php

use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\CategoryController;

Route::redirect('/', '/loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('admin#loginPage');
Route::get('RegisterPage',[AuthController::class,'RegisterPage'])->name('admin#register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::middleware([AdminAuth::class])->group(function () {
        Route::get('dashboard',[AuthController::class,'dashboard'])->name('admin#dashboard');
        Route::prefix('profile')->group(function(){
            Route::get('only',[profileController::class,'profile'])->name('admin#profile');
            Route::get('adminChangepassword',[profileController::class,'changePassword'])->name('admin#changepassword');
        });
        Route::get('Contacts',[VoterController::class,'viewVoter'])->name('admin#selectors');
        Route::get('adminusers',[AuthController::class,'viewusers'])->name('admin#users');
        Route::get('adminproduct',[ProductController::class,'product'])->name('admin#product');

        Route::prefix('Category')->group(function(){
            Route::get('/',[CategoryController::class,'category'])->name('admin#category');
            Route::post('/addCate',[CategoryController::class,'addCate'])->name('admin#add#cate');
    Route::get('/EditCategory/id',[CategoryController::class,'edtitCate'])->name('admin#Cate#edit');
    Route::get('/deleteCategory/{id}',[CategoryController::class,'deleteCate'])->name('admin#Cate#delete');
        });
        Route::prefix('product')->group(function(){
            Route::get('Cate/search',[ProductController::class,'list'])->name('admin#Categ#search');
            Route::post('addproduct',[ProductController::class,'addproduct'])->name('admin#add#product');
            Route::get('/details/{id}',[ProductController::class,'productdet'])->name('product#details');
            Route::get('delete/{id}',[ProductController::class,'deleteproduct'])->name('product#delete');
        });
    });

});
