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

Auth::routes();

Route::get('/logout','Auth\LoginController@logout');
Route::get('/','HomeController@index');
Route::group(['middleware' => ['checkPermission', 'auth']], function() {
	//Route::get('/','HomeController@index');
	/**User**/
	Route::get('/users','UsersController@index');
	Route::get('/quan-ly','UsersController@quan_ly');
    Route::group(['prefix'=>'users'],function(){
	Route::put('{id}/changeStatus','UsersController@changeStatus')->name('users.changeStatus');
	Route::get('modal_resetpassword','UsersController@modal_resetpassword')->name('users.modal_resetpassword');
    Route::get('{id}/reset-password','UsersController@reset')->name('users.reset-password');
    Route::post('update-password','UsersController@update_password')->name('users.update-password');
    route::get('users-destroy','UsersController@usersDestroy')->name('users.users-destroy');

    Route::put('{id}/revertUser','UsersController@revertUser')->name('users.revertUser');
    Route::get('{id}/profile','UsersController@profile')->name('users.profile');
	Route::put('{id}/revertUser','UsersController@revertUser')->name('users.revertUser');


    });
	Route::resource('permissions', 'PermissionsController');
	Route::group(['prefix'=>'permissions'],function(){
		Route::get('{id}/show','PermissionsController@show')->name('permissions.show');
	});

	Route::resource('users', 'UsersController');
	/**Role**/
	Route::resource('roles', 'RolesController');
	Route::group(['prefix'=>'roles'],function(){
		Route::put('{id}/changeStatus','RolesController@changeStatus')->name('roles.changeStatus');
	});
	Route::resource('permissions', 'PermissionsController');
	Route::group(['prefix'=>'permissions'],function(){
		Route::get('{id}/show','PermissionsController@show')->name('permissions.show');
	});


	Route::resource('categories', 'CategoriesController');

	Route::group(['prefix'=>'categories'],function(){
        Route::put('{id}/changeStatus','CategoriesController@changeStatus')->name('categories.changeStatus');
	});

    Route::resource('news', 'NewsController');
    Route::resource('product', 'ProductsController');
    Route::resource('service', 'ServicesController');
    Route::resource('solutions', 'SolutionsController');
    Route::resource('pricing', 'PricingsController');
    Route::resource('affiliate', 'AffiliatesController');
    Route::resource('community', 'CommunitiesController');
    Route::resource('photo', 'PhotoController');
    Route::resource('contacts', 'ContactsController');
    Route::resource('banners', 'BannersController');
    Route::resource('systems', 'SystemsController');
    Route::resource('statistics', 'StatisticsController');
    Route::resource('supports', 'SupportsController');

    Route::group(['prefix'=>'news'],function(){
        Route::delete('{id}/deleteimage','NewsController@deleteimage')->name('news.deleteimage');


    });

    Route::get('qly-noi-dung','NewsController@qlynoidung')->name('qlynoidung');
    Route::get('setting','SystemsController@setting')->name('setting');
    route::put('save_config/{id}','ContactsController@save_config')->name('save_config');
    Route::get('danh-sach-gui-lien-he','ContactsController@index')->name('contacts.index');
    Route::put('{id}/changeStatusRegis','ContactsController@changeStatusRegis')->name('contacts.changeStatusRegis');
    route::delete('deleteUserRegis/{id}','ContactsController@deleteUserRegis')->name('contacts.deleteUserRegis');
    route::get('thong-tin-trang','ContactsController@thong_tin_trang')->name('contacts.thong_tin_trang');
    route::put('save_info/{id}','ContactsController@saveInfo')->name('contacts.saveInfo');

});
Route::get('cloud-server','HomeController@cloudserver')->name('cloudserver');

Route::get('/gioi-thieu','HomeController@gioi_thieu')->name('gioi_thieu');
Route::get('/affiliate','HomeController@affiliate')->name('affiliate');
Route::get('/pricing','HomeController@pricing')->name('pricing');
Route::get('/giai-phap','HomeController@giaiphap')->name('giaiphap');
Route::get('/san-pham','HomeController@sanpham')->name('sanpham');
Route::get('/tin-tuc','HomeController@tintuc');
Route::get('/lien-he','HomeController@contact');
Route::post('/lien-he','HomeController@form_lien_he')->name('home.form_lien_he');

Route::get('/du-an','HomeController@duAn');
Route::get('/dich-vu','HomeController@dichvu');
Route::get('/du-an/{slug}','HomeController@danh_muc');
Route::get('/san-pham/chi-tiet/{slug}','HomeController@chi_tiet_bai_viet')->name('danh-muc.chitietbaiviet');
Route::get('/tin-tuc/chi-tiet/{slug}','HomeController@tintucchitiet')->name('danh-muc.tintucchitiet');
Route::get('/san-pham/{id}/bai-viet','HomeController@bai_viet')->name('danh-muc.bai-viet');
Route::post('/tim-kiem','HomeController@tim_kiem')->name('home.search');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
