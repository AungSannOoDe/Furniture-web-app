<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('user',function(){
    Route('product/showtable',[RouteController::class,'showtable']);
});
Route::get('product/list',[RouteController::class,'productlist']);
Route::get('Category/list',[RouteController::class,'Categorylist']);
Route::get('users/list',[RouteController::class,'userlist']);
Route::get('order/list',[RouteController::class,'orderlist']);
Route::get('Cart/list',[RouteController::class,'Cartlist']);
Route::get('rating/list',[RouteController::class,'ratelist']);

//post
Route::post('Category/create',[RouteController::class,'createCategory']);
Route::post('Contact/create',[RouteController::class,'createContact']);

//delete
Route::get('Delete/category/{id}',[RouteController::class,'deleteCategory']);

//edit and update
Route::get('category/list/{id}',[RouteController::class,'editCategory']);
Route::post('category/update',[RouteController::class,'updateCategory']);
