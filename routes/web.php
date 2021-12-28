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
//trang chủ website
Route::get('quanlytimvieclam.com',[
	'as'=>'quanlytimvieclam.com',
	'uses'=>'QuanlytimvieclamController@quanlytimvieclam'
]);

//trang việc làm
Route::get('quanlytimvieclam.com/viec-lam',[
	'as'=>'vieclam',
	'uses'=>'QuanlytimvieclamController@vieclam'
]);

//trang chi tiết việc làm
Route::get('quanlytimvieclam.com/viec-lam/chi-tiet/{id}',[
	'as'=>'chitietvieclam',
	'uses'=>'QuanlytimvieclamController@chitietvieclam'
]);

//trang việc làm hôm nay
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-hom-nay',[
	'as'=>'vieclamhomnay',
	'uses'=>'QuanlytimvieclamController@vieclamhomnay'
]);
//trang việc làm hôm qua
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-hom-qua',[
	'as'=>'vieclamhomqua',
	'uses'=>'QuanlytimvieclamController@vieclamhomqua'
]);
//trang việc làm toàn thời gian
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-toan-thoi-gian',[
	'as'=>'vieclamtoanthoigian',
	'uses'=>'QuanlytimvieclamController@vieclamtoanthoigian'
]);
//trang việc làm bán thời gian
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-ban-thoi-gian',[
	'as'=>'vieclambanthoigian',
	'uses'=>'QuanlytimvieclamController@vieclambanthoigian'
]);
//trang việc làm theo giờ
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-theo-gio',[
	'as'=>'vieclamtheogio',
	'uses'=>'QuanlytimvieclamController@vieclamtheogio'
]);
//trang việc làm thực tập sinh
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-thuc-tap-sinh',[
	'as'=>'vieclamthuctapsinh',
	'uses'=>'QuanlytimvieclamController@vieclamthuctapsinh'
]);
//trang việc làm công ty
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-cong-ty/{id}',[
	'as'=>'vieclamcongty',
	'uses'=>'QuanlytimvieclamController@vieclamcongty'
]);
//trang việc làm khu vực
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-khu-vuc/{id}',[
	'as'=>'vieclamkhuvuc',
	'uses'=>'QuanlytimvieclamController@vieclamkhuvuc'
]);
//trang việc làm ngành nghề
Route::get('quanlytimvieclam.com/viec-lam/viec-lam-nganh-nghe/{id}',[
	'as'=>'vieclamnganhnghe',
	'uses'=>'QuanlytimvieclamController@vieclamnganhnghe'
]);

//ứng tuyển việc làm

Route::post('quanlytimvieclam.com/viec-lam/chi-tiet-viec-lam/ung-tuyen',[
	'as'=>'ungtuyen',
	'uses'=>'QuanlytimvieclamController@postungtuyen'
]);
//lưu việc làm

Route::post('quanlytimvieclam.com/viec-lam/chi-tiet-viec-lam/luu',[
	'as'=>'luu',
	'uses'=>'QuanlytimvieclamController@postluu'
]);


//danh sách công ty
Route::get('quanlytimvieclam.com/cong-ty',[
	'as'=>'congty',
	'uses'=>'QuanlytimvieclamController@congty'
]);

//trang chi tiết công ty
Route::get('quanlytimvieclam.com/cong-ty/chi-tiet-cong-ty/{id}',[
	'as'=>'chitietcongty',
	'uses'=>'QuanlytimvieclamController@chitietcongty'
]);



//trang đăng nhập của ứng viên
Route::get('quanlytimvieclam.com/ho-so-cua-toi/dang-nhap',[
	'as'=>'dangnhapUV',
	'uses'=>'QuanlytimvieclamController@getdangnhapUV'
]);
//trang đăng nhập của ứng viên
Route::post('quanlytimvieclam.com/ho-so-cua-toi/dang-nhap',[
	'as'=>'dangnhapUV',
	'uses'=>'QuanlytimvieclamController@postdangnhapUV'
]);

//trang đăng ký của ứng viên
Route::get('quanlytimvieclam.com/ho-so-cua-toi/dang-ky',[
	'as'=>'dangky',
	'uses'=>'QuanlytimvieclamController@dangky'
]);
Route::post('quanlytimvieclam.com/ho-so-cua-toi/dang-ky',[
	'as'=>'dangky',
	'uses'=>'QuanlytimvieclamController@postdangky'
]);
//trang chủ của ứng viên sau khi đăng nhập
Route::get('quanlytimvieclam.com/ho-so-cua-toi/dashboard/index',[
	'middleware'=>'uvcheckout',
	'as'=>'indexUV',
	'uses'=>'QuanlytimvieclamController@getindexUV'
]);
//cập nhập hồ sơ ứng viên
Route::post('quanlytimvieclam.com/ho-so-cua-toi/cap-nhap-ho-so',[
	'middleware'=>'uvcheckout',
	'as'=>'capnhaphosoungvien',
	'uses'=>'QuanlytimvieclamController@capnhaphosoungvien'
]);
//trang việc làm đã ứng tuyển
Route::get('quanlytimvieclam.com/ho-so-cua-toi/viec-lam-da-ung-tuyen',[
	'middleware'=>'uvcheckout',
	'as'=>'vieclamdaungtuyen',
	'uses'=>'QuanlytimvieclamController@vieclamdaungtuyen'
]);
//trang việc làm đã lưu
Route::get('quanlytimvieclam.com/ho-so-cua-toi/viec-lam-da-luu',[
	'middleware'=>'uvcheckout',
	'as'=>'vieclamdaluu',
	'uses'=>'QuanlytimvieclamController@vieclamdaluu'
]);
//xóa việc đã ứng tuyển
Route::post('quanlytimvieclam.com/ho-so-cua-toi/viec-lam-da-ung-tuyen/xoa/{id}',[
	'middleware'=>'uvcheckout',
	'as'=>'XoaViecUngTuyen',
	'uses'=>'QuanlytimvieclamController@XoaViecUngTuyen'
]);
//xóa việc đã lưu
Route::post('quanlytimvieclam.com/ho-so-cua-toi/viec-lam-da-luu/xoa/{id}',[
	'middleware'=>'uvcheckout',
	'as'=>'XoaViecLuu',
	'uses'=>'QuanlytimvieclamController@XoaViecLuu'
]);


//--PHẦN NHÀ TUYỂN DỤNG--//
//trang nhà tuyển dụng lúc chưa đăng nhập
Route::get('quanlytimvieclam.com/nha-tuyen-dung',[
	'as'=>'nhatuyendung',
	'uses'=>'QuanlytimvieclamController@nhatuyendung'
]);

//trang đăng nhập nhà tuyển dụng
Route::get('quanlytimvieclam.com/nha-tuyen-dung/dang-nhap',[
	'as'=>'getdangnhapNTD',
	'uses'=>'QuanlytimvieclamController@getdangnhapNTD'
]);
Route::post('quanlytimvieclam.com/nha-tuyen-dung/dang-nhap',[
	'as'=>'dangnhapNTD',
	'uses'=>'QuanlytimvieclamController@postdangnhapNTD'
]);

//trang đăng ký nhà tuyển dụng
Route::get('quanlytimvieclam.com/nha-tuyen-dung/dang-ky',[
	'as'=>'dangkyNTD',
	'uses'=>'QuanlytimvieclamController@dangkyNTD'
]);
Route::post('quanlytimvieclam.com/nha-tuyen-dung/dang-ky',[
	'as'=>'dangkyNTD',
	'uses'=>'QuanlytimvieclamController@postdangkyNTD'
]);
// trang nhà tuyển dụng sau khi đăng nhập
Route::get('quanlytimvieclam.com/nha-tuyen-dung/dashboard/index',[
	'middleware'=>'ntdcheckout',
	'as'=>'indexNTD',
	'uses'=>'QuanlytimvieclamController@indexNTD'
]);
//cập nhập hồ sơ nhà tuyển dụng
Route::post('quanlytimvieclam.com/nha-tuyen-dung/cap-nhap-ho-so',[
	'middleware'=>'ntdcheckout',
	'as'=>'capnhaphosoNTD',
	'uses'=>'QuanlytimvieclamController@capnhaphosoNTD'
]);
//đăng bài mới của nhà tuyển dụng
Route::post('quanlytimvieclam.com/nha-tuyen-dung/dang-bai-moi',[
	'middleware'=>'ntdcheckout',
	'as'=>'dangbaimoiNTD',
	'uses'=>'QuanlytimvieclamController@dangbaimoiNTD'
]);
//trang việc làm đã đăng của nhà tuyển dụng
Route::get('quanlytimvieclam.com/nha-tuyen-dung/viec-lam-da-dang',[
	'middleware'=>'ntdcheckout',
	'as'=>'vieclamdadang',
	'uses'=>'QuanlytimvieclamController@vieclamdadang'
]);
//trang xem chi tiết việc làm đã đăng của nhà tuyển dụng
Route::get('quanlytimvieclam.com/nha-tuyen-dung/viec-lam-da-dang/chi-tiet/{id_vl}',[
	'middleware'=>'ntdcheckout',
	'as'=>'xemVL',
	'uses'=>'QuanlytimvieclamController@xemVL'
]);
//trang sửa việc làm đã đăng của nhà tuyển dụng
Route::get('quanlytimvieclam.com/nha-tuyen-dung/viec-lam-da-dang/cap-nhap/{id_vl}',[
	'middleware'=>'ntdcheckout',
	'as'=>'suaVL',
	'uses'=>'QuanlytimvieclamController@suaVL'
]);
//trang sửa việc làm đã đăng của nhà tuyển dụng
Route::post('quanlytimvieclam.com/nha-tuyen-dung/viec-lam-da-dang/cap-nhap/{id_vl}',[
	'middleware'=>'ntdcheckout',
	'as'=>'suaVL',
	'uses'=>'QuanlytimvieclamController@postsuaVL'
]);
//trang xóa việc làm đã đăng của nhà tuyển dụng
Route::post('quanlytimvieclam.com/nha-tuyen-dung/viec-lam-da-dang/xoa/{id_vl}',[
	'middleware'=>'ntdcheckout',
	'as'=>'xoaVL',
	'uses'=>'QuanlytimvieclamController@xoaVL'
]);
//thêm hình ảnh
Route::get('quanlytimvieclam.com/nha-tuyen-dung/them-hinh/{id}',[
	'middleware'=>'ntdcheckout',
	'as'=>'themhinh',
	'uses'=>'QuanlytimvieclamController@themhinh'
]);
Route::post('quanlytimvieclam.com/nha-tuyen-dung/them-hinh/{id}',[
	'middleware'=>'ntdcheckout',
	'as'=>'themhinh',
	'uses'=>'QuanlytimvieclamController@postthemhinh'
]);
//trang hồ sơ ứng viên
Route::get('quanlytimvieclam.com/nha-tuyen-dung/ho-so-ung-vien',[
	'middleware'=>'ntdcheckout',
	'as'=>'hosoungvien',
	'uses'=>'QuanlytimvieclamController@hosoungvien'
]);
//duyệt hồ sơ ứng viên
Route::get('quanlytimvieclam.com/nha-tuyen-dung/ho-so-ung-vien/duyet/{id}',[
	'middleware'=>'ntdcheckout',
	'as'=>'duyethosoungvien',
	'uses'=>'QuanlytimvieclamController@duyethosoungvien'
]);
//chi tiết hồ chơ ứng viên
Route::get('quanlytimvieclam.com/nha-tuyen-dung/ho-so-ung-vien/chi-tiet/{id}',[
	'middleware'=>'ntdcheckout',
	'as'=>'chitiethosoungvien',
	'uses'=>'QuanlytimvieclamController@chitiethosoungvien'
]);

//--PHẦN QUẢN TRỊ--//
// trang chủ admin
Route::get('quanlytimvieclam.com/admin',[
	'middleware'=>'admincheckout',
	'as'=>'admin',
	'uses'=>'QuanlytimvieclamController@admin'
]);
// trang đăng nhập admin
Route::get('quanlytimvieclam.com/admin/dang-nhap',[
	'as'=>'dangnhapadmin',
	'uses'=>'QuanlytimvieclamController@dangnhapadmin'
]);
Route::post('quanlytimvieclam.com/admin/dang-nhap',[
	'as'=>'dangnhapadmin',
	'uses'=>'QuanlytimvieclamController@postdangnhapadmin'
]);
//duyệt bài việc làm
Route::get('quanlytimvieclam.com/admin/quan-ly-viec-lam/duyet/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'duyet',
	'uses'=>'QuanlytimvieclamController@duyet'
]);

//trang việc làm admin
Route::get('quanlytimvieclam.com/admin/quan-ly-viec-lam',[
	'middleware'=>'admincheckout',
	'as'=>'quanlyvieclam',
	'uses'=>'QuanlytimvieclamController@quanlyvieclam'
]);
//trang xem chi tiết việc làm của admin
Route::get('quanlytimvieclam.com/admin/quan-ly-viec-lam/chi-tiet/{id_vl}',[
	'middleware'=>'admincheckout',
	'as'=>'xemVLadmin',
	'uses'=>'QuanlytimvieclamController@xemVLadmin'
]);
//trang user của admin
Route::get('quanlytimvieclam.com/admin/quan-ly-user',[
	'middleware'=>'admincheckout',
	'as'=>'quanlyuser',
	'uses'=>'QuanlytimvieclamController@quanlyuser'
]);
//trang user ứng viên của admin
Route::get('quanlytimvieclam.com/admin/quan-ly-user/ung-vien/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'userungvien',
	'uses'=>'QuanlytimvieclamController@userungvien'
]);
//trang user nhà tuyển dụng của admin
Route::get('quanlytimvieclam.com/admin/quan-ly-user/nha-tuyen-dung/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'usernhatuyendung',
	'uses'=>'QuanlytimvieclamController@usernhatuyendung'
]);
//trang user của admin
Route::get('quanlytimvieclam.com/admin/quan-ly-user/admin/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'useradmin',
	'uses'=>'QuanlytimvieclamController@useradmin'
]);
//trang sửa user của admin
Route::get('quanlytimvieclam.com/admin/quan-ly-user/admin/cap-nhap/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'suauseradmin',
	'uses'=>'QuanlytimvieclamController@suauseradmin'
]);
Route::post('quanlytimvieclam.com/admin/quan-ly-user/admin/cap-nhap/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'suauseradmin',
	'uses'=>'QuanlytimvieclamController@postsuauseradmin'
]);
//trang xóa user admin
Route::post('quanlytimvieclam.com/admin/quan-ly-user/xoa-admin/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'xoauseradmin',
	'uses'=>'QuanlytimvieclamController@xoauseradmin'
]);
//trang xóa user ứng viên
Route::post('quanlytimvieclam.com/admin/quan-ly-user/xoa-ung-vien/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'xoauserungvien',
	'uses'=>'QuanlytimvieclamController@xoauserungvien'
]);
//trang xóa user của admin
Route::post('quanlytimvieclam.com/admin/quan-ly-user/xoa-nha-tuyen-dung/{id}',[
	'middleware'=>'admincheckout',
	'as'=>'xoauserNTD',
	'uses'=>'QuanlytimvieclamController@xoauserNTD'
]);

//trang danh sách khu vực
Route::get('quanlytimvieclam.com/admin/quan-ly-khu-vuc/',[
	'middleware'=>'admincheckout',
	'as'=>'quanlykhuvuc',
	'uses'=>'QuanlytimvieclamController@quanlykhuvuc'
]);
//trang thêm khu vực
Route::post('quanlytimvieclam.com/admin/quan-ly-khu-vuc/them',[
	'middleware'=>'admincheckout',
	'as'=>'themkhuvuc',
	'uses'=>'QuanlytimvieclamController@themkhuvuc'
]);
//trang sửa khu vực
Route::get('quanlytimvieclam.com/admin/quan-ly-khu-vuc/cap-nhap/{id_kv}',[
	'middleware'=>'admincheckout',
	'as'=>'suakhuvuc',
	'uses'=>'QuanlytimvieclamController@suakhuvuc'
]);
Route::post('quanlytimvieclam.com/admin/quan-ly-khu-vuc/cap-nhap/{id_kv}',[
	'middleware'=>'admincheckout',
	'as'=>'suakhuvuc',
	'uses'=>'QuanlytimvieclamController@postsuakhuvuc'
]);
//xóa khu vực
Route::get('quanlytimvieclam.com/admin/quan-ly-khu-vuc/xoa/{id_kv}',[
	'middleware'=>'admincheckout',
	'as'=>'xoakhuvuc',
	'uses'=>'QuanlytimvieclamController@xoakhuvuc'
]);

//trang danh sách ngành nghề
Route::get('quanlytimvieclam.com/admin/quan-ly-nganh-nghe/',[
	'middleware'=>'admincheckout',
	'as'=>'quanlynganhnghe',
	'uses'=>'QuanlytimvieclamController@quanlynganhnghe'
]);
//trang thêm ngành nghề
Route::post('quanlytimvieclam.com/admin/quan-ly-nganh-nghe/them',[
	'middleware'=>'admincheckout',
	'as'=>'themnganhnghe',
	'uses'=>'QuanlytimvieclamController@themnganhnghe'
]);
//trang sửa ngành nghề
Route::get('quanlytimvieclam.com/admin/quan-ly-nganh-nghe/cap-nhap/{id_nn}',[
	'middleware'=>'admincheckout',
	'as'=>'suanganhnghe',
	'uses'=>'QuanlytimvieclamController@suanganhnghe'
]);
Route::post('quanlytimvieclam.com/admin/quan-ly-nganh-nghe/cap-nhap/{id_nn}',[
	'middleware'=>'admincheckout',
	'as'=>'suanganhnghe',
	'uses'=>'QuanlytimvieclamController@postsuanganhnghe'
]);
//xóa ngành nghề
Route::get('quanlytimvieclam.com/admin/quan-ly-nganh-nghe/xoa/{id_nn}',[
	'middleware'=>'admincheckout',
	'as'=>'xoanganhnghe',
	'uses'=>'QuanlytimvieclamController@xoanganhnghe'
]);

//timf kiếm
Route::get('quanlytimvieclam.com/viec-lam/tim-kiem',[
	'as'=>'timkiem',
	'uses'=>'QuanlytimvieclamController@timkiem'
]);
//lọc
Route::get('quanlytimvieclam.com/viec-lam/tim-kiem/loc',[
	'as'=>'loc',
	'uses'=>'QuanlytimvieclamController@loc'
]);




//trang đăng xuất chung
Route::get('quanlytimvieclam.com/dang-xuat',[
	'as'=>'dangxuat',
	'uses'=>'QuanlytimvieclamController@getdangxuat'
]);
//trang đăng xuất ứng viên
Route::get('quanlytimvieclam.com/ho-so-cua-toi/dang-xuat',[
	'as'=>'dangxuatUV',
	'uses'=>'QuanlytimvieclamController@getdangxuatUV'
]);
//trang đăng xuất nhà tuyển dụng
Route::get('quanlytimvieclam.com/nha-tuyen-dung/dang-xuat',[
	'as'=>'dangxuatNTD',
	'uses'=>'QuanlytimvieclamController@getdangxuatNTD'
]);
//trang đăng xuất admin
Route::get('quanlytimvieclam.com/admin/dang-xuat',[
	'as'=>'dangxuatAdmin',
	'uses'=>'QuanlytimvieclamController@getdangxuatAdmin'
]);