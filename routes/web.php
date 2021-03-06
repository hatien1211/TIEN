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

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('index-admin',function()
{
	return view('admin.layout.master');
});
	
Route::get('index-guest',function(){
	return view('frontend.pages.phong');
});

Route::get('dangki',function(){
	return view('fontend.dangki');
})->name('dangki');
Route::get('/dangki','AuthController@getsignup')->name('dangki');
Route::post('/dangki','AuthController@postsignup')->name('xl_dangki');
Route::get('/dangnhap','AuthController@getdangnhapAdmin')->name('dangnhap');
Route::post('/dangnhap','AuthController@postdangnhapAdmin')->name('xl_dangnhap');
Route::get('/dangxuat','AuthController@logout')->name('dangxuat');

//nh�m admin
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){


	Route::group(['prefix'=>'users'],function(){
		Route::get('/danhsach','UsersController@getDanhSach')->name('lists');

		Route::get('/them','UsersController@getThem')->name('show_addusers');
		Route::post('/them-users','UsersController@postThem')->name('add_users');

		Route::get('/sua/{id}','UsersController@getSua')->name('show_fixusers');
		Route::post('/sua-users/{id}','UsersController@postSua')->name('fix_users');

		Route::get('/xoa/{id}','UsersController@getXoa')->name('del_users');
	});


	Route::group(['prefix'=>'slide'],function(){
		Route::get('/danhsach','SlideController@getDanhSach')->name('listsSlide');

		Route::get('/them','SlideController@getThem')->name('show_addslide');
		Route::post('/them-slide','SlideController@postThem')->name('add_slide');

		Route::get('/sua/{id}','SlideController@getSua')->name('show_fixslide');
		Route::post('/sua-slide/{id}','SlideController@postSua')->name('fix_slide');

		Route::get('/xoa/{id}','SlideController@getXoa')->name('del_slides');
	});

	Route::group(['prefix'=>'dichvu'],function(){
		Route::get('/danhsach','DichvuController@getDanhSach')->name('listsDichvu');

		Route::get('/them','DichvuController@getThem')->name('show_adddichvu');
		Route::post('/them-dichvu','DichvuController@postThem')->name('add_dichvu');

		Route::get('/sua/{id}','DichvuController@getSua')->name('show_fixdichvu');
		Route::post('/sua-dichvu/{id}','DichvuController@postSua')->name('fix_dichvu');

		Route::get('/xoa/{id}','DichvuController@getXoa')->name('del_dichvu');
	});



	Route::group(['prefix'=>'phong'],function(){
		Route::get('/danhsach','PhongController@getDanhSach')->name('listsPhong');

		Route::get('/them','PhongController@getThem')->name('show_addphong');
		Route::post('/them-phong','PhongController@postThem')->name('add_phong');

		Route::get('/sua/{id}','PhongController@getSua')->name('show_fixphong');
		Route::post('/sua-phong/{id}','PhongController@postSua')->name('fix_phong');

		Route::get('/xoa/{id}','PhongController@getXoa')->name('del_phong');
	});


	Route::group(['prefix'=>'AnhLQ'],function(){
		Route::get('/danhsach','AnhLQController@getDanhSach')->name('listsanhlq');

		Route::get('/them','AnhLQController@getThem')->name('show_addanhlq');
		Route::post('/them-anh','AnhLQController@postThem')->name('add_anhlq');

		Route::get('/sua/{id}','AnhLQController@getSua')->name('show_fixanhlq');
		Route::post('/sua-anh/{id}','AnhLQController@postSua')->name('fix_anhlq');

		Route::get('/xoa/{id}','AnhLQController@getXoa')->name('del_anhlq');
	});
	
	
	Route::post('/datphong/{id}','PagesController@datphong')->name('datphong');
	Route::get('status','PagesController@getPaymentStatus');
	Route::get('/dondat','PagesController@dondat')->name('dondat');
	Route::get('/chitietdondat/{id}','PagesController@chitietdondat')->name('chitietdondat');
	Route::post('/comment/{id}','CommentController@postComment')->name('comment');

});




Route::get('/','PagesController@index')->name('index');
Route::get('dichvu','PagesController@dichvu')->name('dichvu');
Route::get('phongdetail/{id}','PagesController@detailphong')->name('chitietphong');
