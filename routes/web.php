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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/','Frontend\FrontendController@index')->name('frontend-home');
Route::get('/about-us','Frontend\FrontendController@aboutus')->name('about.us');
Route::get('/contact-us','Frontend\FrontendController@contactus')->name('contact.us');
Route::get('/news-events/details/{id}','Frontend\FrontendController@newsdetails')->name('news.event.details');
Route::get('/our/mission','Frontend\FrontendController@ourmission')->name('our.mission');
Route::get('/our/vission','Frontend\FrontendController@ourvission')->name('our.vission');
Route::get('/our/news','Frontend\FrontendController@ournews')->name('our.news');
Route::post('/contact/store','Frontend\FrontendController@contactstore')->name('contact.store');

// All view

Route::get('history/view','Frontend\FrontendController@historyview')->name('histories.postview');
Route::get('chiarman/view','Frontend\FrontendController@chiarmanview')->name('chiarmans.postview');
Route::get('principal/view','Frontend\FrontendController@principalview')->name('principals.postview');
Route::get('post/page/{post_id}','Frontend\FrontendController@postpage')->name('posts.page');
Route::get('alladmission/post/view','Frontend\FrontendController@alladmissionview')->name('posts.alladmissionpostview');
Route::get('allpost/view','Frontend\FrontendController@allpostview')->name('posts.allpostview');
Route::get('eventall/view','Frontend\FrontendController@eventallview')->name('posts.eventallview');
Route::get('stuffall/view','Frontend\FrontendController@stuffallview')->name('stuffs.stuffallview');
Route::get('allexam/post/view','Frontend\FrontendController@allexamview')->name('posts.allexampostview');
Route::get('allresult/post/view','Frontend\FrontendController@allresultview')->name('posts.allresultpostview');
Route::get('photogalary/view','Frontend\FrontendController@photogalary')->name('posts.photogalary');
Route::get('videogalary/view','Frontend\FrontendController@videogalary')->name('posts.videogalary');




// All view end


Auth::routes();  

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'HomeController@adminhome')->name('admin.dashboard');




     //========Login============
    Route::prefix('admin')->group(function(){
	Route::get('/login','backend\Auth\LoginController@showloginform')->name('admin.login');
	Route::post('/login/submit','backend\Auth\LoginController@login')->name('admin.login.submit');
  //========Log out============
	Route::post('/logout/submit','backend\Auth\LoginController@adminlogout')->name('admin.logout.submit');
  //========Password Reset============
	Route::get('/password/reset','backend\Auth\ForgotPasswordController@showlinkform')->name('admin.password.request');
	Route::post('/password/reset/submit','backend\Auth\ForgotPasswordController@reset')->name('admin.password.update');
});
    //========Roles============

	Route::prefix('roles')->group(function(){
	Route::get('/view','backend\RoleController@view')->name('roles.view');
	Route::get('/add','backend\RoleController@add')->name('roles.add');
	Route::post('/store','backend\RoleController@store')->name('roles.store');
	Route::get('/edit/{id}','backend\RoleController@edit')->name('roles.edit');
	Route::post('/update/{id}','backend\RoleController@update')->name('roles.update');
	Route::get('/delete/{id}','backend\RoleController@delete')->name('roles.delete');
	
});
	//========Users 2============

	Route::prefix('userss')->group(function(){
	Route::get('/view','backend\UserssController@view')->name('userss.view');
	Route::get('/add','backend\UserssController@add')->name('userss.add');
	Route::post('/store','backend\UserssController@store')->name('userss.store');
	Route::get('/edit/{id}','backend\UserssController@edit')->name('userss.edit');
	Route::post('/update/{id}','backend\UserssController@update')->name('userss.update');
	Route::get('/delete/{id}','backend\UserssController@delete')->name('userss.delete');
	
});

	//========Users============

	Route::prefix('users')->group(function(){
	Route::get('/view','backend\UserController@view')->name('users.view');
	Route::get('/add','backend\UserController@add')->name('users.add');
	Route::post('/store','backend\UserController@store')->name('users.store');
	Route::get('/edit/{id}','backend\UserController@edit')->name('users.edit');
	Route::post('/update/{id}','backend\UserController@update')->name('users.update');
	Route::get('/delete/{id}','backend\UserController@delete')->name('users.delete');
	
});

	//========Profiles============

Route::prefix('profiles')->group(function(){
	Route::get('/view','backend\ProfileController@view')->name('profiles.view');
	Route::get('/edit','backend\ProfileController@edit')->name('profiles.edit');
	Route::post('/store','backend\ProfileController@update')->name('profiles.update');
	Route::get('/password/view','backend\ProfileController@passwordview')->name('profiles.password.view');
	Route::post('/password/update','backend\ProfileController@passwordupdate')->name('profiles.password.update');
});

//========Logo============

    Route::prefix('images')->group(function(){
	Route::get('/logo/view','backend\LogoController@view')->name('images.logos.view');
	Route::get('/logo/add','backend\LogoController@add')->name('images.logos.add');
	Route::post('logo/store','backend\LogoController@store')->name('images.logos.store');
	Route::get('/logo/edit/{id}','backend\LogoController@edit')->name('images.logos.edit');
	Route::post('/logo/update/{id}','backend\LogoController@update')->name('images.logos.update');
	Route::get('/logo/delete/{id}','backend\LogoController@delete')->name('images.logos.delete');

//========Banner============
 
	Route::get('/banner/view','backend\BannerController@view')->name('banners.view');
	Route::get('/banner/add','backend\BannerController@add')->name('banners.add');
	Route::post('/banner/store','backend\BannerController@store')->name('banners.store');
	Route::get('/banner/edit/{id}','backend\BannerController@edit')->name('banners.edit');
	Route::post('/banner/update/{id}','backend\BannerController@update')->name('banners.update');
	Route::get('/banner/delete/{id}','backend\BannerController@delete')->name('banners.delete');
	

//========Profile============


	Route::get('/slider/view','backend\SliderController@view')->name('sliders.view');
	Route::get('/slider/add','backend\SliderController@add')->name('sliders.add');
	Route::post('/slider/store','backend\SliderController@store')->name('sliders.store');
	Route::get('/slider/edit/{id}','backend\SliderController@edit')->name('sliders.edit');
	Route::post('/slider/update/{id}','backend\SliderController@update')->name('sliders.update');
	Route::get('/slider/delete/{id}','backend\SliderController@delete')->name('sliders.delete');
	
});

    //========History============

 Route::prefix('pages')->group(function(){
	Route::get('/history/view','backend\HistoryController@view')->name('histories.view');
	Route::get('/history/add','backend\HistoryController@add')->name('histories.add');
	Route::post('/history/store','backend\HistoryController@store')->name('histories.store');
	Route::get('/history/edit/{id}','backend\HistoryController@edit')->name('histories.edit');
	Route::post('/history/update/{id}','backend\HistoryController@update')->name('histories.update');
	Route::get('/history/delete/{id}','backend\HistoryController@delete')->name('histories.delete');

//========Chiarman============
	
	Route::get('chiarman/view','backend\ChiarmanController@view')->name('chiarmans.view');
	Route::get('chiarman/add','backend\ChiarmanController@add')->name('chiarmans.add');
	Route::post('chiarman/store','backend\ChiarmanController@store')->name('chiarmans.store');
	Route::get('chiarman/edit/{id}','backend\ChiarmanController@edit')->name('chiarmans.edit');
	Route::post('chiarman/update/{id}','backend\ChiarmanController@update')->name('chiarmans.update');
	Route::get('chiarman/delete/{id}','backend\ChiarmanController@delete')->name('chiarmans.delete');

//========Principal============

	Route::get('principal/view','backend\PrincipalController@view')->name('principals.view');
	Route::get('principal/add','backend\PrincipalController@add')->name('principals.add');
	Route::post('principal/store','backend\PrincipalController@store')->name('principals.store');
	Route::get('principal/edit/{id}','backend\PrincipalController@edit')->name('principals.edit');
	Route::post('principal/update/{id}','backend\PrincipalController@update')->name('principals.update');
	Route::get('principal/delete/{id}','backend\PrincipalController@delete')->name('principals.delete');
});




	//========Post============
 Route::prefix('posts')->group(function(){

 	Route::get('post/catagories/view','backend\CatagoryController@view')->name('catagory.view');
Route::get('post/catagories/add','backend\CatagoryController@add')->name('catagory.add');
Route::post('post/catagories/store','backend\CatagoryController@store')->name('catagory.store');
Route::get('post/catagories/edit{id}','backend\CatagoryController@edit')->name('catagory.edit');
Route::post('post/catagories/update{id}','backend\CatagoryController@update')->name('catagory.update');
Route::get('post/catagories/delete{id}','backend\CatagoryController@delete')->name('catagory.delete');
Route::get('post/catagories/inactive{id}','backend\CatagoryController@inactive')->name('catagory.inactive');
Route::get('post/catagories/active{id}','backend\CatagoryController@active')->name('catagory.active');

	Route::get('post/view','backend\PostController@view')->name('posts.view');
	Route::get('post/add','backend\PostController@add')->name('posts.add');
	Route::post('post/store','backend\PostController@store')->name('posts.store');
	Route::get('post/edit/{id}','backend\PostController@edit')->name('posts.edit');
	Route::post('post/update/{id}','backend\PostController@update')->name('posts.update');
	Route::get('post/delete/{id}','backend\PostController@delete')->name('posts.delete');

});

 Route::prefix('stuffs')->group(function(){
	Route::get('stuff/view','backend\StuffController@view')->name('stuffs.view');
	Route::get('stuff/add','backend\StuffController@add')->name('stuffs.add');
	Route::post('stuff/store','backend\StuffController@store')->name('stuffs.store');
	Route::get('stuff/edit/{id}','backend\StuffController@edit')->name('stuffs.edit');
	Route::post('stuff/update/{id}','backend\StuffController@update')->name('stuffs.update');
	Route::get('stuff/delete/{id}','backend\StuffController@delete')->name('stuffs.delete');

});


Route::prefix('vissions')->group(function(){
	Route::get('/view','backend\VissionController@view')->name('vissions.view');
	Route::get('/add','backend\VissionController@add')->name('vissions.add');
	Route::post('/store','backend\VissionController@store')->name('vissions.store');
	Route::get('/edit/{id}','backend\VissionController@edit')->name('vissions.edit');
	Route::post('/update/{id}','backend\VissionController@update')->name('vissions.update');
	Route::get('/delete/{id}','backend\VissionController@delete')->name('vissions.delete');
	
});

Route::prefix('news_events')->group(function(){
	Route::get('/view','backend\News_eventController@view')->name('news_events.view');
	Route::get('/add','backend\News_eventController@add')->name('news_events.add');
	Route::post('/store','backend\News_eventController@store')->name('news_events.store');
	Route::get('/edit/{id}','backend\News_eventController@edit')->name('news_events.edit');
	Route::post('/update/{id}','backend\News_eventController@update')->name('news_events.update');
	Route::get('/delete/{id}','backend\News_eventController@delete')->name('news_events.delete');
	
});

Route::prefix('services')->group(function(){
	Route::get('/view','backend\ServiceController@view')->name('services.view');
	Route::get('/add','backend\ServiceController@add')->name('services.add');
	Route::post('/store','backend\ServiceController@store')->name('services.store');
	Route::get('/edit/{id}','backend\ServiceController@edit')->name('services.edit');
	Route::post('/update/{id}','backend\ServiceController@update')->name('services.update');
	Route::get('/delete/{id}','backend\ServiceController@delete')->name('services.delete');
	
});

Route::prefix('contacts')->group(function(){
	Route::get('/view','backend\ContactController@view')->name('contacts.view');
	Route::get('/add','backend\ContactController@add')->name('contacts.add');
	Route::post('/store','backend\ContactController@store')->name('contacts.store');
	Route::get('/edit/{id}','backend\ContactController@edit')->name('contacts.edit');
	Route::post('/update/{id}','backend\ContactController@update')->name('contacts.update');
	Route::get('/delete/{id}','backend\ContactController@delete')->name('contacts.delete');
	Route::get('/communicate/','backend\ContactController@viewcommunicate')->name('contacts.communicate'); 
	Route::get('/communicate/delete/{id}','backend\ContactController@deletecommunicate')->name('contacts.communicate.delete');
});

Route::prefix('abouts')->group(function(){
	Route::get('/view','backend\AboutController@view')->name('abouts.view');
	Route::get('/add','backend\AboutController@add')->name('abouts.add');
	Route::post('/store','backend\AboutController@store')->name('abouts.store');
	Route::get('/edit/{id}','backend\AboutController@edit')->name('abouts.edit');
	Route::post('/update/{id}','backend\AboutController@update')->name('abouts.update');
	Route::get('/delete/{id}','backend\AboutController@delete')->name('abouts.delete');
	
});

Route::prefix('photos')->group(function(){
	Route::get('/view','backend\PhotoController@view')->name('photos.view');
	Route::get('/add','backend\PhotoController@add')->name('photos.add');
	Route::post('/store','backend\PhotoController@store')->name('photos.store');
	Route::get('/edit/{id}','backend\PhotoController@edit')->name('photos.edit');
	Route::post('/update/{id}','backend\PhotoController@update')->name('photos.update');
	Route::get('/delete/{id}','backend\PhotoController@delete')->name('photos.delete');
	
});

Route::prefix('videos')->group(function(){
	Route::get('/view','backend\VideoController@view')->name('videos.view');
	Route::get('/add','backend\VideoController@add')->name('videos.add');
	Route::post('/store','backend\VideoController@store')->name('videos.store');
	Route::get('/edit/{id}','backend\VideoController@edit')->name('videos.edit');
	Route::post('/update/{id}','backend\VideoController@update')->name('videos.update');
	Route::get('/delete/{id}','backend\VideoController@delete')->name('videos.delete');
	
});



