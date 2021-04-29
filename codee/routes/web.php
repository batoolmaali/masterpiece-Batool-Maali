<?php
use Illuminate\Support\Facades\Mail;
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

//admin
Route::post("/admin/store", "AdminController@store");
Route::get("/admin", "AdminController@index");
Route::get("/stock", "AdminController@stock");
Route::get("/reports", "AdminController@reports");
Route::get("/post1", "AdminController@post");
Route::delete("/post1/delete/{id}", "PostController@destroyPost");
Route::get("/Statistics", "AdminController@Statistics");
Route::delete("/admin/delete/{id}", "AdminController@destroy");
Route::get("/admin/edit/{id}", "AdminController@edit");
Route::put("/admin/update/{id}", "AdminController@update");

//company
Route::post("/company/store", "CompanyController@store")->middleware('auth:admin');
Route::get("/company", "CompanyController@index")->middleware('auth:admin');
Route::delete("/company/delete/{id}", "CompanyController@destroy")->middleware('auth:admin');
Route::get("/company/edit/{id}", "CompanyController@edit")->middleware('auth:admin');
Route::put("/company/update/{id}", "CompanyController@update")->middleware('auth:admin');


//flower-shop                  
Route::post("/flowershop/store", "FlowerShopController@store")->middleware('auth:admin');
Route::get("/flowershop", "FlowerShopController@index")->middleware('auth:admin');
Route::delete("/flowershop/delete/{id}", "FlowerShopController@destroy")->middleware('auth:admin');
Route::get("/flowershop/edit/{id}", "FlowerShopController@edit")->middleware('auth:admin');
Route::put("/flowershop/update/{id}", "FlowerShopController@update")->middleware('auth:admin');

//dresses-shop                  
Route::post("/shopdresses/store", "DressesShopController@store")->middleware('auth:admin');
Route::get("/shopdresses", "DressesShopController@index")->middleware('auth:admin');
Route::delete("/shopdresses/delete/{id}", "DressesShopController@destroy")->middleware('auth:admin');
Route::get("/shopdresses/edit/{id}", "DressesShopController@edit")->middleware('auth:admin');
Route::put("/shopdresses/update/{id}", "DressesShopController@update")->middleware('auth:admin');

//suit-shop                  
Route::post("/shopsuit/store", "SuitShopController@store")->middleware('auth:admin');
Route::get("/shopsuit", "SuitShopController@index")->middleware('auth:admin');
Route::delete("/shopsuit/delete/{id}", "SuitShopController@destroy")->middleware('auth:admin');
Route::get("/shopsuit/edit/{id}", "SuitShopController@edit")->middleware('auth:admin');
Route::put("/shopsuit/update/{id}", "SuitShopController@update")->middleware('auth:admin');


//photographers              
Route::post("/photographers/store", "PhotographerController@store")->middleware('auth:admin');
Route::get("/photographers", "PhotographerController@index")->middleware('auth:admin');
Route::get("/photographers1", "PhotographerController@show");
Route::get("/photographers2/{id}", "PhotographerController@single");
Route::delete("/photographers/delete/{id}", "PhotographerController@destroy")->middleware('auth:admin');
Route::get("/photographers/edit/{id}", "PhotographerController@edit")->middleware('auth:admin');
Route::put("/photographers/update/{id}", "PhotographerController@update")->middleware('auth:admin');

//tourism-offices         
Route::post("/tourism-offices/store", "TourismOfficesController@store")->middleware('auth:admin');
Route::get("/tourism-offices", "TourismOfficesController@index")->middleware('auth:admin');
Route::delete("/tourism-offices/delete/{id}", "TourismOfficesController@destroy")->middleware('auth:admin');
Route::get("/tourism-offices/edit/{id}", "TourismOfficesController@edit")->middleware('auth:admin');
Route::put("/tourism-offices/update/{id}", "TourismOfficesController@update")->middleware('auth:admin');

//dresses       
Route::post("/dresses/store", "DressController@store")->middleware('auth:admin');
Route::get("/dresses", "DressController@index")->middleware('auth:admin');
Route::get("/dresses1", "DressController@show");
Route::get("/dresses2/{id}", "DressController@single");
Route::delete("/dresses/delete/{id}", "DressController@destroy")->middleware('auth:admin');
Route::get("/dresses/edit/{id}", "DressController@edit")->middleware('auth:admin');
Route::put("/dresses/update/{id}", "DressController@update")->middleware('auth:admin');
Route::get('/homepage','DressController@public');

//suit       
Route::post("/suit/store", "SuitController@store")->middleware('auth:admin');
Route::get("/suit", "SuitController@index")->middleware('auth:admin');
Route::get("/suit1", "SuitController@show");
Route::get("/suit2/{id}", "SuitController@single");
Route::delete("/suit/delete/{id}", "SuitController@destroy")->middleware('auth:admin');
Route::get("/suit/edit/{id}", "SuitController@edit")->middleware('auth:admin');
Route::put("/suit/update/{id}", "SuitController@update")->middleware('auth:admin');



//flower       
Route::post("/flower/store", "FlowerController@store")->middleware('auth:admin');
Route::get("/flower", "FlowerController@index")->middleware('auth:admin');
Route::get("/flower1", "FlowerController@show");
Route::get("/flower2/{id}", "FlowerController@single");
Route::delete("/flower/delete/{id}", "FlowerController@destroy")->middleware('auth:admin');
Route::get("flower/edit/{id}", "FlowerController@edit")->middleware('auth:admin');
Route::put("/flower/update/{id}", "FlowerController@update")->middleware('auth:admin');

//hall      
Route::post("/hall/store", "HallController@store")->middleware('auth:admin');
Route::get("/hall", "HallController@index")->middleware('auth:admin');
Route::get("/hall1", "HallController@show");
Route::get("/hall2/{id}", "HallController@single");
Route::delete("/hall/delete/{id}", "HallController@destroy")->middleware('auth:admin');
Route::get("hall/edit/{id}", "HallController@edit")->middleware('auth:admin');
Route::put("/hall/update/{id}", "HallController@update")->middleware('auth:admin');

//Tourist_destinations     
Route::post("/Tourist_destinations/store", "TouristDestinationController@store")->middleware('auth:admin');
Route::get("/Tourist_destinations", "TouristDestinationController@index")->middleware('auth:admin');
Route::get("/Tourist_destinations1", "TouristDestinationController@show");
Route::get("/Tourist_destinations2/{id}", "TouristDestinationController@single");
Route::delete("/Tourist_destinations/delete/{id}", "TouristDestinationController@destroy")->middleware('auth:admin');
Route::get("Tourist_destinations/edit/{id}", "TouristDestinationController@edit")->middleware('auth:admin');
Route::put("/Tourist_destinations/update/{id}", "TouristDestinationController@update")->middleware('auth:admin');

//post
Route::post('/post/store', 'PostController@store')->middleware('auth:web');
Route::get('/post', 'PostController@index');
Route::delete('/post/delete/{id}', 'PostController@destroy')->middleware('auth:web');
Route::post('/searchpost', 'PostController@search');
Route::post('/search', 'DressController@search');
Route::get('/like/{id}','PostController@like');
Route::get('/mark',function(){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect("/post");
    });

//comment
Route::post('/comment/{post}', 'CommentController@store');
Route::delete('/comment/delete/{id}', 'CommentController@destroy');

//user

Route::get('/user', 'UserController@index');
Route::delete('/user/delete/{id}', 'UserController@destroy');
Route::get("/user/{id}", "UserController@single");
Route::get("/user/edit/{id}", "UserController@edit");
Route::put("/user/update/{id}", "UserController@update");
Route::get('/send','UserController@sendemail');


//order
Route::post('/booking-Tourist_destinations', 'BookingController@Tourist_destinations');
Route::post('/booking-flower', 'BookingController@flower')->middleware('auth:web');
Route::get('/book', 'BookingController@read')->middleware('auth:web');
Route::post('/booking-dress', 'BookingController@dress')->middleware('auth:web');
Route::post('/booking-suit', 'BookingController@suit')->middleware('auth:web');
Route::post('/booking-hall', 'BookingController@hall')->middleware('auth:web');
Route::post('/booking-photographer', 'BookingController@photographer')->middleware('auth:web');
Route::delete('/book/delete/{id}', 'BookingController@destroy');
Route::get("/order", "BookingController@order");
  // contact
Route::post("/contact/store", "ContactController@store");
Route::get('/thanks',"ContactController@show");
Route::get('/customer-message',"ContactController@index");
Route::get('/contact us', function () {
    return view('public.contact-us');
});

//package


Route::get('/package', 'PackageController@read');
Route::post('/packagesOrders/{id}', 'PackageOrderController@store')->middleware('auth:web');
Route::get('/packageorder', 'PackageOrderController@read')->middleware('auth:web');
Route::delete('/packageOrder/delete/{id}', 'PackageOrderController@destroy');
Route::get('/packages', 'PackageController@show');
Route::delete('/packages/delete/{id}', 'PackageController@destroy');
// Route::get('/one', 'DressController@show');
Route::get('/homepage','TouristDestinationController@public');
   


Route::get('/p', function () {
    return view('homepage');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/services', function () {
    return view('public.services');
});
// Route::get('/re', function () {
//     return view('serv');
// });

Route::get("/pp", "AdminController@Statistics1");




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/loginaaa', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get("/", "AdminController@index")->name('admin.dashboard');
});
