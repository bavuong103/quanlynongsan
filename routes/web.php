<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('index',[
    'as'=>'index',
    'uses'=>'App\Http\Controllers\HomeController@index'
]);

Route::get('about',[
    'as'=>'about',
    'uses'=>'App\Http\Controllers\HomeController@about'
]);

Route::get('category-product/{id_cate}',[
    'as'=>'category-product',
    'uses'=>'App\Http\Controllers\ProductController@categoryProduct'
]);

Route::get('detail/{id}',[
    'as'=>'detail',
    'uses'=>'App\Http\Controllers\ProductController@detail'
]);

Route::post('comment/{id}',[
    'as'=>'comment',
    'uses'=>'App\Http\Controllers\ProductController@postComment'
]);

Route::get('cart',[
    'as'=>'cart',
    'uses'=>'App\Http\Controllers\CartController@showCart'
]);

Route::get('addToCart/{id}',[
    'as'=>'addToCart',
    'uses'=>'App\Http\Controllers\CartController@addToCart'
]);

Route::get('deleteCart/{id}',[
    'as'=>'deleteCart',
    'uses'=>'App\Http\Controllers\CartController@deleteCart'
]);

Route::get('deleteCart/{id}',[
    'as'=>'deleteCart',
    'uses'=>'App\Http\Controllers\CartController@deleteCart'
]);

Route::get('deleteCart/{id}',[
    'as'=>'deleteCart',
    'uses'=>'App\Http\Controllers\CartController@deleteCart'
]);

Route::get('increateItemCart/{id}',[
    'as'=>'increateItemCart',
    'uses'=>'App\Http\Controllers\CartController@increateItemCart'
]);

Route::get('decreateItemCart/{id}',[
    'as'=>'decreateItemCart',
    'uses'=>'App\Http\Controllers\CartController@decreateItemCart'
]);

Route::get('checkOut',[
    'as'=>'checkOut',
    'uses'=>'App\Http\Controllers\CartController@getCheckout'
]);

Route::post('checkOut',[
    'as'=>'checkOut',
    'uses'=>'App\Http\Controllers\CartController@postCheckout'
]);

Route::get('thanks',[
    'as'=>'thanks',
    'uses'=>'App\Http\Controllers\CartController@thanks'
]);

Route::get('login',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\AccountController@getLogin'
]);

Route::post('login',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\AccountController@postLogin'
]);

Route::get('signup',[
    'as'=>'signup',
    'uses'=>'App\Http\Controllers\AccountController@getSignup'
]);

Route::post('signup',[
    'as'=>'signup',
    'uses'=>'App\Http\Controllers\AccountController@postSignup'
]);

Route::get('logout',[
    'as'=>'logout',
    'uses'=>'App\Http\Controllers\AccountController@getLogout'
]);

Route::get('search',[
    'as'=>'search',
    'uses'=>'App\Http\Controllers\HomeController@getSearch'
]);

Route::get('bill',[
    'as'=>'bill',
    'uses'=>'App\Http\Controllers\CartController@getBill'
]);

Route::get('billDetails/{id_bill}',[
    'as'=>'billDetails',
    'uses'=>'App\Http\Controllers\CartController@getBillDetails'
]);

Route::get('info/{id}',[
    'as'=>'info',
    'uses'=>'App\Http\Controllers\AccountController@getInfo'
]);


//Admin

Route::get('admin/index',[
    'as'=>'admin/index',
    'uses'=>'App\Http\Controllers\Admin\HomeController@index'
]);

//Category
Route::get('admin/category',[
    'as'=>'admin/category',
    'uses'=>'App\Http\Controllers\Admin\CategoryController@listCategory'
]);

Route::get('admin/add-category',[
    'as'=>'admin/add-category',
    'uses'=>'App\Http\Controllers\Admin\CategoryController@getAddCategory'
]);

Route::post('admin/add-category',[
    'as'=>'admin/add-category',
    'uses'=>'App\Http\Controllers\Admin\CategoryController@postAddCategory'
]);

Route::get('admin/deleteCategory/{id_cate}',[
    'as'=>'admin/deleteCategory',
    'uses'=>'App\Http\Controllers\Admin\CategoryController@deleteCategory'
]);

Route::get('admin/editCategory/{id_cate}',[
    'as'=>'admin/editCategory',
    'uses'=>'App\Http\Controllers\Admin\CategoryController@getEditCategory'
]);

Route::post('admin/editCategory/{id_cate}',[
    'as'=>'admin/editCategory',
    'uses'=>'App\Http\Controllers\Admin\CategoryController@postEditCategory'
]);

//Product
Route::get('admin/product',[
    'as'=>'admin/product',
    'uses'=>'App\Http\Controllers\Admin\ProductController@listProduct'
]);

Route::get('admin/add-product',[
    'as'=>'admin/add-product',
    'uses'=>'App\Http\Controllers\Admin\ProductController@getAddProduct'
]);

Route::post('admin/add-product',[
    'as'=>'admin/add-product',
    'uses'=>'App\Http\Controllers\Admin\ProductController@postAddProduct'
]);

Route::get('admin/deleteProduct/{id}',[
    'as'=>'admin/deleteProduct',
    'uses'=>'App\Http\Controllers\Admin\ProductController@deleteProduct'
]);

Route::get('admin/editProduct/{id}',[
    'as'=>'admin/editProduct',
    'uses'=>'App\Http\Controllers\Admin\ProductController@getEditProduct'
]);

Route::post('admin/editProduct/{id}',[
    'as'=>'admin/editProduct',
    'uses'=>'App\Http\Controllers\Admin\ProductController@postEditProduct'
]);

//Bill
Route::get('admin/bill',[
    'as'=>'admin/bill',
    'uses'=>'App\Http\Controllers\Admin\BillController@listBill'
]);

Route::get('admin/billDetail/{id_bill}',[
    'as'=>'admin/billDetail',
    'uses'=>'App\Http\Controllers\Admin\BillController@getBillDetails'
]);

Route::get('admin/billPrint/{id_bill}',[
    'as'=>'admin/billPrint',
    'uses'=>'App\Http\Controllers\Admin\BillController@getBillPrint'
]);

Route::post('admin/billUpdateStatus/{id_bill}',[
    'as'=>'admin/billUpdateStatus',
    'uses'=>'App\Http\Controllers\Admin\BillController@postBillUpdateStatus'
]);

//Comment
Route::get('admin/comment',[
    'as'=>'admin/comment',
    'uses'=>'App\Http\Controllers\Admin\CommentController@listComment'
]);

//User
Route::get('admin/user',[
    'as'=>'admin/user',
    'uses'=>'App\Http\Controllers\Admin\UserController@listUser'
]);

Route::get('admin/add-user',[
    'as'=>'admin/add-user',
    'uses'=>'App\Http\Controllers\Admin\UserController@getAddUser'
]);

Route::post('admin/add-user',[
    'as'=>'admin/add-user',
    'uses'=>'App\Http\Controllers\Admin\UserController@postAddUser'
]);

Route::get('admin/deleteUser/{id}',[
    'as'=>'admin/deleteUser',
    'uses'=>'App\Http\Controllers\Admin\UserController@deleteUser'
]);

Route::get('admin/editUser/{id}',[
    'as'=>'admin/editUser',
    'uses'=>'App\Http\Controllers\Admin\UserController@getEditUser'
]);

Route::post('admin/editUser/{id}',[
    'as'=>'admin/editUser',
    'uses'=>'App\Http\Controllers\Admin\UserController@postEditUser'
]);

//Login
Route::get('admin/login',[
    'as'=>'admin/login',
    'uses'=>'App\Http\Controllers\Admin\AccountController@getLogin'
]);

Route::post('admin/login',[
    'as'=>'admin/login',
    'uses'=>'App\Http\Controllers\Admin\AccountController@postLogin'
]);

Route::get('admin/logout',[
    'as'=>'admin/logout',
    'uses'=>'App\Http\Controllers\Admin\AccountController@logout'
]);