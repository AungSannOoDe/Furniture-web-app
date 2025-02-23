<?php

use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\CategoryController;

Route::redirect('/', '/userloginPage');
Route::get('userloginPage',[AuthController::class,'userLogin'])->name('user#login');
Route::get('userregisterPage',[AuthController::class,'userRegister'])->name('user#register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('user')->group(function(){
        Route::get('home',[userController::class,'index'])->name('user#index');
        Route::get('product',[userController::class,'product'])->name('user#product');
        Route::get('singleProduct/{id}',[userController::class,'singleProduct'])->name('user#singleproduct');
        Route::get('billings',[userController::class,'billings'])->name('user#billings');
        Route::get('Contact',[userController::class,'Contact'])->name('user#Contact');
        Route::get('about',[userController::class,'about'])->name('user#about');
        Route::get('details',[userController::class,'details'])->name('user#details');
        Route::get('cart',[userController::class,'cart'])->name('user#cart');
    });
});




Route::get('loginPage',[AuthController::class,'loginPage'])->name('admin#loginPage');
Route::get('RegisterPage',[AuthController::class,'RegisterPage'])->name('admin#register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::middleware([AdminAuth::class])->group(function () {
        Route::get('home',[AuthController::class,'dashboard'])->name('admin#dashboard');
        Route::prefix('profile')->group(function(){
            Route::get('only',[profileController::class,'profile'])->name('admin#profile');
            Route::get('adminChangepassword',[profileController::class,'changePassword'])->name('admin#changepassword');
        });
        Route::get('Contacts',[VoterController::class,'viewVoter'])->name('admin#selectors');
        Route::get('adminusers',[AuthController::class,'viewusers'])->name('admin#users');
        Route::get('adminproduct',[ProductController::class,'product'])->name('admin#product');
        Route::get('admin/user/{id}',[AuthController::class,'details'])->name('admin#details');
    Route::get('users/delete/{id}',[AuthController::class,'delete'])->name('admin#user#delete');
    Route::get('uers/order',[OrderController::class,'viewsOrder'])->name('admin#orders');
    Route::get('admin/status',[AjaxController::class,'status'])->name('status#order');
    Route::get('status/update',[AjaxController::class,'statusUpdate'])->name('status#update');
    Route::get('orderlist/{ordercode}',[AuthController::class,'viewsOrder'])->name('users#orderlists');
        Route::prefix('Category')->group(function(){
            Route::get('/',[CategoryController::class,'category'])->name('admin#category');
            Route::post('/addCate',[CategoryController::class,'addCate'])->name('admin#add#cate');
    Route::get('/EditCategory/{id}',[CategoryController::class,'editCate'])->name('admin#Cate#edit');
    Route::get('/deleteCategory/{id}',[CategoryController::class,'deleteCate'])->name('admin#Cate#delete');
    Route::post('/Category/Update',[CategoryController::class,'CateUpdate'])->name('admin#Cate#update');
        });
        Route::prefix('product')->group(function(){
            Route::get('Cate/search',[ProductController::class,'list'])->name('admin#Categ#search');
            Route::post('addproduct',[ProductController::class,'addproduct'])->name('admin#add#product');
            Route::get('/details/{id}',[ProductController::class,'productdet'])->name('product#details');
            Route::get('delete/{id}',[ProductController::class,'deleteproduct'])->name('product#delete');
            Route::get('edit/{id}',[ProductController::class,'editproduct'])->name('product#edit');
            Route::post('update',[ProductController::class,'updateProduct'])->name('admin#update#product');
            Route::get('search',[ProductController::class,'searchName'])->name('admin#product#search');
           Route::get('addDetails',[ProductController::class,'addDetails'])->name('admin#add#details');
           Route::post('addFormDetails',[ProductController::class,'addFormDetails'])->name('admin#FormAddDetails');
           Route::get('FormDetails',[ProductController::class,'FormDetails'])->name('admin#details#list');
        });
        Route::prefix('ajax')->group(function(){
           Route::get('details/showtable',[AjaxController::class,'showtable'])->name('admin#show');
           Route::get('details/showForm',[AjaxController::class,'showForm'])->name('admin#show#form');
           Route::post('formadd',[AjaxController::class,'formadd'])->name('admin#form#add');
           Route::get('list',[AjaxController::class,'list'])->name('admin#product#list');
           Route::get('addtoCart',[AjaxController::class,'addtoCart'])->name('admin#product#addCart');
        });

    });

});

