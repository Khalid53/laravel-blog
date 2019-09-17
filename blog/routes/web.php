<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//-------------------Start Front-End Section------------------

Route::get('/',[
    'uses'    =>   'NewShopController@index',
    'as'    =>   '/'
]);
Route::get('/category/product/{id}',[
    'uses'    =>   'NewShopController@categoryProduct',
    'as'    =>   'category-product'
]);
Route::get('/product/details/{id}/{name}',[
    'uses'    =>   'NewShopController@productDetails',
    'as'    =>   'product-details'
]);


Route::get('/mail-us',[
    'uses'    =>   'NewShopController@mailContent',
    'as'    =>   'mail-us'
]);



// start cart installation
Route::post('/cart/add',[
    'uses'    =>   'CartController@addToCart',
    'as'    =>   'add-to-cart'
]);
Route::get('/cart/show',[
    'uses'    =>   'CartController@showCart',
    'as'    =>   'show-cart'
]);
Route::get('/cart/delete/{rowId}',[
    'uses'    =>   'CartController@deleteCart',
    'as'    =>   'delete-cart-item'
]);
Route::post('/cart/update',[
    'uses'    =>   'CartController@updateCart',
    'as'    =>   'update-cart'
]);
Route::get('/checkout',[
    'uses'    =>   'checkoutController@index',
    'as'    =>   'checkout'
]);
Route::post('/coustomer/signup',[
    'uses'    =>   'checkoutController@coustomerSignupInfo',
    'as'    =>   'coustomer-signup'
]);
Route::post('/check/customer/login',[
    'uses'    =>   'checkoutController@customerLoginCheck',
    'as'    =>   'customer-login'
]);
Route::post('/customer/logout',[
    'uses'    =>   'checkoutController@customerLogoutCheck',
    'as'    =>   'customer-logout'
]);
Route::get('/new/customer/login',[
    'uses'    =>   'checkoutController@newCustomerLogin',
    'as'    =>   'new-customer-login'
]);



Route::get('/checkout/shipping',[
    'uses'    =>   'checkoutController@shippingForm',
    'as'    =>   'checkout-shipping'
]);
Route::post('/shipping/save',[
    'uses'    =>   'checkoutController@saveShippingInfo',
    'as'    =>   'new-shipping'
]);
Route::get('/checkout/payment',[
    'uses'    =>   'checkoutController@paymentForm',
    'as'    =>   'checkout-payment'
]);
Route::post('/checkout/order',[
    'uses'    =>   'checkoutController@newOrder',
    'as'    =>   'new-order'
]);
Route::get('/complete/order',[
    'uses'    =>   'checkoutController@completeOrder',
    'as'    =>   'complete-order'
]);


//--------------------End Front-End Section------------------






//-------------------Admin Section-----------------------
//  Start Admin Login Section
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//  End Admin Login Section

Route::group(['middleware' => ['NewShop']], function () {

//Start Admin Category Section
    Route::get('/category/add',[
        'uses'      => 'CategoryController@addCategory',
        'as'        => 'category/add'
    ]);

    Route::post('/category/save',[
        'uses'      => 'CategoryController@newCategory',
        'as'      => 'new-category'
    ]);
    Route::get('/category/manage',[
        'uses'      => 'CategoryController@manageCategory',
        'as'        => 'manage-category'
    ]);
    Route::get('/unpublished/category/{id}',[
        'uses'      => 'CategoryController@unpublishedCategoryInfo',
        'as'        => 'unpublished-category'
    ]);
    Route::get('/published/category/{id}',[
        'uses'      => 'CategoryController@publishedCategoryInfo',
        'as'        => 'published-category'
    ]);
    Route::get('/edit/category/{id}',[
        'uses'      => 'CategoryController@editCategoryInfo',
        'as'        => 'edit-category'
    ]);
    Route::post('/update/category',[
        'uses'      => 'CategoryController@updateCategoryInfo',
        'as'        => 'update-category'
    ]);
    Route::get('/delete/category/{id}',[
        'uses'      => 'CategoryController@deleteCategoryInfo',
        'as'        => 'delete-category'
    ]);
//End Admin Category Section

    //Start Brand Section
    Route::get('/brand/add', [
        'uses'     =>      'BrandController@index',
        'as'       =>      'add-brand'
    ]);
    Route::post('/brand/save', [
        'uses'     =>      'BrandController@storeBrand',
        'as'       =>      'new-brand'
    ]);
    Route::get('/brand/manage', [
        'uses'     =>      'BrandController@manageBrandInfo',
        'as'       =>      'manage-brand'
    ]);
    Route::get('/unpublished/brand/{id}', [
        'uses'     =>      'BrandController@unpublishedBrandInfo',
        'as'       =>      'unpublished-brand'
    ]);
    Route::get('/published/brand/{id}', [
        'uses'     =>      'BrandController@publishedBrandInfo',
        'as'       =>      'published-brand'
    ]);
    Route::get('/edit/brand/{id}', [
        'uses'     =>      'BrandController@editBrandInfo',
        'as'       =>      'edit-brand'
    ]);
    Route::post('/update/brand/', [
        'uses'     =>      'BrandController@updateBrandInfo',
        'as'       =>      'update-brand'
    ]);
    Route::get('/delete/brand/{id}', [
        'uses'     =>      'BrandController@deleteBrandInfo',
        'as'       =>      'delete-brand'
    ]);

//End Brand Section



    //Start Product Section

    Route::get('/product/add', [
        'uses'      =>        'productController@index',
        'as'        =>         'add-product'
    ]);
    Route::post('/product/save', [
        'uses'      =>        'productController@saveProductInfo',
        'as'        =>         'new-product'
    ]);
    Route::get('/manage/product', [
        'uses'      =>        'productController@manageProductInfo',
        'as'        =>         'manage-product'
    ]);
    Route::get('/unpublished/product/{id}', [
        'uses'      =>        'productController@unpublishedProductInfo',
        'as'        =>         'unpublished-product'
    ]);
    Route::get('/published/product/{id}', [
        'uses'      =>        'productController@publishedProductInfo',
        'as'        =>         'published-product'
    ]);
    Route::get('/edit/product/{id}', [
        'uses'      =>        'productController@editProductInfo',
        'as'        =>         'edit-product'
    ]);
    Route::get('/view/product/{id}', [
        'uses'      =>        'productController@viewProductInfo',
        'as'        =>         'view-product'
    ]);
    Route::post('/update/product', [
        'uses'      =>        'productController@updateProductInfo',
        'as'        =>         'update-product'
    ]);
    Route::get('/delete/product/{id}', [
        'uses'      =>        'productController@deleteProductInfo',
        'as'        =>         'delete-product'
    ]);
    Route::get('/back/btn', [
        'uses'      =>        'productController@backBtn',
        'as'        =>         'back-btn'
    ]);

    //End Production Section



    //Start Order Section
    Route::get('/order/manage-order', [
        'uses'      =>         'OrderController@manageOrder',
        'as'        =>         'manage-order',

    ]);
    Route::get('/order/view-order-details/{id}', [
        'uses'      =>         'OrderController@viewOrderDetails',
        'as'        =>         'view-order-details'
    ]);
    Route::get('/order/view-order-invoice/{id}', [
        'uses'      =>         'OrderController@viewOrderInvoice',
        'as'        =>         'view-order-invoice'
    ]);
    Route::get('/order/download-order-invoice/{id}', [
        'uses'      =>         'OrderController@downloadOrderInvoice',
        'as'        =>         'download-order-invoice'
    ]);
});

//-------------------End Admin Section-----------------------




















