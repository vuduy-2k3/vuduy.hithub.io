<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Cti;
use App\Khuvuc;
use App\Nganhnghe;
use App\Nhatuyendung;
use App\Thongtinvieclam;
use App\Ungvien;
use App\Vieclam;
use App\User;
use App\Ungtuyen;
use App\Luu;
use Hash;
use Session; 
use Auth;
use attempt;
use DB;
use MONTH;
use orderby;
use App\Date;
use Carbon\Carbon;

class QuanlytimvieclamController extends Controller
{
    //trang chủ website
    public function quanlytimvieclam()
    {
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $nganhnghe = Nganhnghe::all();
        $cty = Cti::with('khuvucs:id_kv,ten_kv')->limit(6)->orderByDesc('id')->get();
        $vieclam = Vieclam::where('trangthai',1)->limit(10)->orderByDesc('id')->get();
        return view('quanlytimvieclam',compact('khuvuc_n','nganhnghe_n','khuvuc','nganhnghe','cty','vieclam'));
    }

    //trang việc làm
    public function vieclam()
    {
        $vieclam = Vieclam::where('trangthai',1)->orderByDesc('id')->paginate(10);
        $count_vieclam = Vieclam::where('trangthai',1)->get();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $nganhnghe = Nganhnghe::all();
        $cty1 = Cti::paginate(5);
        //ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);
        //ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();

        return view('vieclam.vieclam',compact('vieclam','count_vieclam','khuvuc','khuvuc_n','nganhnghe_n','khuvuc1','nganhnghe','cty1','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }

    //trang chi tiết việc làm
    public function chitietvieclam($id)
    {

        if (Auth::check()) {
            
            $id_user = Auth::user();
            $ungtuyen = DB::table('ungtuyens')
            ->where('ungtuyens.id_user',$id_user->id)
            ->where('ungtuyens.id_vl',$id)
            ->first();
        }
        if (Auth::check()) {
            
            $id_user = Auth::user();
            $luu = DB::table('luus')
            ->where('luus.id_user',$id_user->id)
            ->where('luus.id_vl',$id)
            ->first();
        }
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $nganhnghe = Nganhnghe::all();
        $vieclam = Vieclam::find($id);

        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $hethang = Vieclam::where('id',$id)
        ->where('ngayhethang','<',$ngayhientai)
        ->first();
        
        
        return view('vieclam.chitietvieclam',compact('khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','vieclam','hethang'));
    }

    //việc làm hôm nay
    public function vieclamhomnay()
    {
        $cty = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $cty1 = Cti::paginate(5);
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        return view('vieclam.vieclamhomnay',compact('khuvuc1','cty1','khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }

    //việc làm hôm qua
    public function vieclamhomqua()
    {
        $cty = Cti::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $cty1 = Cti::paginate(5);
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        return view('vieclam.vieclamhomqua',compact('khuvuc1','cty1','khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }

    //việc làm toàn thời gian
    public function vieclamtoanthoigian()
    {
        $cty = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $cty1 = Cti::paginate(5);
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        return view('vieclam.vieclamtoanthoigian',compact('khuvuc1','cty1','khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }

    //việc làm bán thời gian
    public function vieclambanthoigian()
    {
        $cty = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $cty1 = Cti::paginate(5);
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        return view('vieclam.vieclambanthoigian',compact('khuvuc1','cty1','khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }

    //việc làm theo giờ
    public function vieclamtheogio()
    {
        $cty = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $cty1 = Cti::paginate(5);
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        return view('vieclam.vieclamtheogio',compact('khuvuc1','cty1','khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }

    //việc làm thực tập sinh
    public function vieclamthuctapsinh()
    {
        $cty = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $cty1 = Cti::paginate(5);
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        return view('vieclam.vieclamthuctapsinh',compact('khuvuc1','cty1','khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }

    //việc làm công ty
    public function vieclamcongty($id)
    {
        $cty = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $congty = Cti::find($id);
        $vlcty = Vieclam::where('id_cty',$id)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        $count_vlcty = Vieclam::where('id_cty',$id)->where('trangthai',1)->get();
        return view('vieclam.vieclamcongty',compact('khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','vlcty','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh','count_vlcty'));
    }

    //việc làm khu vực
    public function vieclamkhuvuc($id)
    {
        $cty = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->orderByDesc('id')->paginate(10);

        $kv = Vieclam::find($id);
        $vlkv = Vieclam::where('id_kv',$id)->where('trangthai',1)->orderByDesc('id')->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        $count_vlkv = Vieclam::where('id_kv',$id)->where('trangthai',1)->get();
        return view('vieclam.vieclamkhuvuc',compact('khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','vlkv','id','kv','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh','count_vlkv'));
    }

    //việc làm ngành nghề
    public function vieclamnganhnghe($id)
    {
        $cty = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $nganhnghe = Nganhnghe::all();
        //việc làm ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //việc làm ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->orderByDesc('id')->paginate(10);

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->orderByDesc('id')->paginate(10);
        $vlnganhnghe = Vieclam::where('id_nn',$id)->where('trangthai',1)->orderByDesc('id')->paginate(10);
        
        $vlkv = Vieclam::where('id_kv',$id)->where('trangthai',1)->orderByDesc('id')->paginate(10);

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        $count_vlnganhnghe = Vieclam::where('id_nn',$id)->where('trangthai',1)->get();
        return view('vieclam.vieclamnganhnghe',compact('khuvuc','khuvuc_n','nganhnghe_n','nganhnghe','cty','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','vlkv','id','vlnganhnghe','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh','count_vlnganhnghe'));
    }

    //ứng tuyển việc làm
    public function postungtuyen(Request $req)
    {
        $id_user =  Auth::user()->id;
        $ungtuyen = new UngTuyen();
        $ungtuyen->id_user=$id_user;
        $ungtuyen->id_vl=$req->id_vl;
        $ungtuyen->id_ntd=$req->id_cty;
        $ungtuyen->save();
        return redirect()->back()->with('success','Đã ứng tuyển');
    }
    //lưu việc làm
    public function postluu(Request $req)
    {
        $id_user =  Auth::user()->id;
        $luu = new Luu();
        $luu->id_user=$id_user;
        $luu->id_vl=$req->id_vl;
        $luu->save();
        return redirect()->back()->with('success','Đã lưu');
    }

    //danh sách công ty
    public function congty()
    {
        $nganhnghe = Nganhnghe::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $cty = Cti::paginate(18);
        $demcty = Cti::all();
        return view('congty.congty',compact('cty','demcty','khuvuc','khuvuc_n','nganhnghe_n','nganhnghe'));
    }

    //chi tiết công ty
    public function chitietcongty($id)
    {
        $cty = Cti::find($id);
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $demvieclam = Vieclam::where('id_cty',$id)->where('trangthai',1)->get();
        $vieclam = Vieclam::where('id_cty',$id)->where('trangthai',1)->paginate(6);

        return view('congty.chitietcongty',compact('cty','khuvuc','khuvuc_n','nganhnghe_n','vieclam','demvieclam'));
    }





    //trang đăng nhập của ứng viên
    public function getdangnhapUV()
    {

        return view('hosocuatoi.dangnhap');
    }
    public function postdangnhapUV(Request $req)
    {
        $this->validate($req,
            [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
            ],
            [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            'password.max'=>'Mật khẩu tối đa 20 kí tự'
            ]
            );
            $dangnhap = array('email' =>$req->email ,'password'=>$req->password );
            if (Auth::attempt($dangnhap)) {
                return redirect()->action('QuanlytimvieclamController@getindexUV');
            }
            else{
                return redirect()->back()->with('success','Mật khẩu sai hoặc tài khoản này chưa được chấp thuận!');
        }
    }

    //trang đăng ký của ứng viên
    public function dangky()
    {
        return view('hosocuatoi.dangky');
    }
    public function postdangky(Request $req)
    {
        $this->validate($req,
        [
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:6|max:20',
        'name'=>'required|regex:/(^[\pL0-9 ]+$)/u',
        'hinhanh'=>'required',
        'ngaysinh'=>'required|date|before:today',
        'gioitinh'=>'required',
        'sdt'=>'required|regex:/(0)[0-9]{9}/|digits:10',
        
        'diachi'=>'required|regex:/(^[\pL0-9 , ]+$)/u',
        ],
        [
                'name.regex' => 'Không được nhập ký tự đặc biệt.',
                'sdt.digits' => 'Số điện thoại phải là 10 số.',
                'diachi.regex' => 'Không được nhập ký tự đặc biệt.'
        ]);

        $tenhinh='';
        if ($req->hasfile('hinhanh')) 
        {
            $this->validate($req, 
            //hàm kiểm tra dữ liệu
            [
            'hinhanh' => 'mimes:jpg,png,jpeg,gif|max:2048',
            ],
            [
            'hinhanh.mimes' => ' Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png .gif',
            'hinhanh.max' => 'Hình ảnh giới hạn dung lượng không quá 2M',
            ]);

            $file = $req->file('hinhanh');
            $tenhinh= $file->getClientOriginalName();
            $destinationPath= public_path('static\assets\images\avt');
            $file->move($destinationPath, $tenhinh);
        };
        $users = new User();
        $users->email=$req->input('email');
        $users->name=$req->input('name');
        $users->password= Hash::make($req->password);
        $users->level="1";
        $users->save();
        //kiểm tra file tồn tại
        
        $ungvien = new Ungvien();
        $ungvien->id=$users->id;
        $ungvien->id_user=$users->id;
        $ungvien->gioitinh=$req->input('gioitinh');
        $ungvien->ngaysinh=$req->input('ngaysinh');
        $ungvien->sdt=$req->input('sdt');
        $ungvien->diachi=$req->input('diachi');
        $ungvien->hinhanh=$tenhinh;               
        $ungvien->save();

        return redirect()->action('QuanlytimvieclamController@getdangnhapUV')->with('success','Đăng ký thành công');
    }

    


    //!--trang sau khi đăng nhập của ứng viên
    public function getindexUV()
    {   

        
        $ungvien = Ungvien::where('id_user',Auth::user()->id)->get();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $vl_ut = Ungtuyen::where('id_user',Auth::user()->id)->get();
        $luu = Luu::where('id_user',Auth::user()->id)->get();
        
        return view('hosocuatoi.index',compact('ungvien','khuvuc','khuvuc_n','nganhnghe_n','vl_ut','luu'));
    }
    //cập nhập hồ sơ ứng viên
    public function capnhaphosoungvien(Request $req)
    {
        $this->validate($req,
        [
        'name'=>'required|regex:/(^[\pL0-9 ]+$)/u',
        'ngaysinh'=>'required|date|before:today',
        'gioitinh'=>'required',
        'sdt'=>'required|/(0)[0-9]{9}/|digits:10',
        
        'diachi'=>'required|regex:/(^[\pL0-9 ]+$)/u',
        ],
        [
        'name.required'=>'Vui lòng nhập họ tên',
        'name.regex'=>'Tên không được nhập ký tự đặc biệt.',
        'ngaysinh.required'=>'Vui lòng nhập ngày sinh',
        'ngaysinh.date'=>'Ngày sinh kh được lớn hơn ngày hiện tại',
        'gioitinh.required'=>'Vui lòng nhập giới tính',
        'sdt.required'=>'Vui lòng nhập số điện thoại',
        'sdt.regex'=>'Định dạng số điện thoại không hợp lệ.',
        'sdt.digits'=>'Số điện thoại phải là :digits số.',
        'diachi.required'=>'Vui lòng nhập địa chỉ',
        'diachi.regex'=>'Không được nhập ký tự đặc biệt.'
        ]);
        

        $id_user = Auth::user()->id;
        $user = User::find($id_user);
        $user->name = $req->name;
        $user->save();

        $id = $id_user;
        $ungvien = Ungvien::find($id_user);
        $ungvien->gioitinh = $req->gioitinh;
        $ungvien->ngaysinh = $req->ngaysinh;
        $ungvien->sdt = $req->sdt;
        $ungvien->diachi = $req->diachi;
        $ungvien->kinhnghiem = $req->kinhnghiem;
        $ungvien->luonghientai = $req->luonghientai;
        $ungvien->luongmongmuon = $req->luongmongmuon;
        $ungvien->vitri = $req->vitri;
        $ungvien->loaihinh = $req->loaihinh;
        $ungvien->bangcap = $req->bangcap;
        $ungvien->khuvuc = $req->khuvuc;
        $ungvien->ghichu = $req->ghichu;
        $ungvien->save();
        return redirect()->back()->with('success','Đã cập nhập hồ sơ');
    }

    //trang việc làm đã ứng tuyển của ứng viên
    public function vieclamdaungtuyen()
    {
        $stt = 1;
        $ungvien = Ungvien::where('id_user',Auth::user()->id)->get();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $id_uv = Auth::user()->id;
        $daungtuyen = Ungtuyen::where('id_user',$id_uv)->get();
        return view('hosocuatoi.vieclamdaungtuyen', compact('stt','daungtuyen','ungvien','khuvuc','khuvuc_n','nganhnghe_n'));
    }
    //trang việc làm đã lưu
    public function vieclamdaluu()
    {
        $stt = 1;
        $ungvien = Ungvien::where('id_user',Auth::user()->id)->get();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $id_uv = Auth::user()->id;
        $daluu = Luu::where('id_user',$id_uv)->get();
        return view('hosocuatoi.vieclamdaluu', compact('stt','daluu','ungvien','khuvuc','khuvuc_n','nganhnghe_n'));
    }
    // xóa việc đã ứng tuyển
    public function XoaViecUngTuyen($id)
    {
        $xoa = Ungtuyen::find($id);
        $xoa->delete();
        return redirect()->back()->with('success','Đã xóa.');
    }
    // xóa việc đã lưu
    public function XoaViecLuu($id)
    {
        $xoa = Luu::find($id);
        $xoa->delete();
        return redirect()->back()->with('success','Đã xóa.');
    }
    //đăng bài mới của nhà tuyển dụng
    public function dangbaimoiNTD(Request $req)
    {
        $this->validate($req,
        [
        'ten_vl'=>'required|regex:/(^[\pL0-9 ]+$)/u',
        'mota'=>'required',
        'yeucau'=>'required',
        'diachi'=>'required|regex:/(^[\pL0-9 ,]+$)/u',
        'soluong'=>'required|integer',
        'mucluong'=>'required|integer',
        'ngayhethang'=>'required|date|after:today',
        'tuoi'=>'required|regex:/[0-9]/',
        'id_kv'=>'required',
        'id_nn'=>'required',
        'tinhchat'=>'required',
        'bangcap'=>'required',
        'chucvu'=>'required',
        'gioitinh'=>'required',
        'vitri'=>'required',
        'kinhnghiem'=>'required'
        ],
        [
            'ten_vl.regex'=>'Tên không được nhập ký tự đặc biệt.',
            'diachi.regex'=>'Địa chỉ không được nhập ký tự đặc biệt.',
            'tuoi.regex'=>'Định dạng không hợp lệ.',
            'id_kv.required'=>'Vui lòng chọn.',
            'id_nn.required'=>'Vui lòng chọn.',
            'tinhchat.required'=>'Vui lòng chọn.',
            'bangcap.required'=>'Vui lòng chọn.',
            'chucvu.required'=>'Vui lòng chọn.',
            'gioitinh.required'=>'Vui lòng chọn.',
            'vitri.required'=>'Vui lòng chọn.',
            'kinhnghiem.required'=>'Vui lòng chọn.'
        ]);
        

        $id_cty = Auth::user()->id;        

        $vieclam = new Vieclam();
        $vieclam->ten_vl = $req->input('ten_vl');
        $vieclam->id_cty = $id_cty;
        $vieclam->id_nn = $req->input('id_nn');
        $vieclam->id_kv = $req->input('id_kv');     
        $vieclam->ngayhethang = $req->input('ngayhethang');
        $vieclam->mucluong = $req->input('mucluong');
        $vieclam->tinhchat = $req->input('tinhchat');
        $vieclam->mota = $req->input('mota');
        $vieclam->yeucau = $req->input('yeucau');
        $vieclam->soluong = $req->input('soluong');
        $vieclam->diachi = $req->input('diachi');
        $vieclam->bangcap = $req->input('bangcap');
        $vieclam->kinhnghiem = $req->input('kinhnghiem');
        $vieclam->vitri = $req->input('vitri');
        $vieclam->chucvu = $req->input('chucvu');
        $vieclam->gioitinh = $req->input('gioitinh');
        $vieclam->tuoi = $req->input('tuoi');
        $vieclam->save();
        return redirect()->back()->with('success','Đã đăng bài, chờ phê duyệt');
    }

    //trang nhà tuyển dụng khi chưa đăng nhập
    public function nhatuyendung()
    {
        $cty = Cti::with('khuvucs:id_kv,ten_kv')->limit(7)->orderByDesc('id')->get();
        return view('/nhatuyendung.trangchu',compact('cty'));
    }

    //trang đăng nhâp của nhà tuyển dụng
    public function getdangnhapNTD()
    {
        return view('/nhatuyendung.dangnhap');
    }
    public function postdangnhapNTD(Request $req)
    {
        $this->validate($req,
            [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
            ],
            [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            'password.max'=>'Mật khẩu tối đa 20 kí tự'
            ]
            );
            $dangnhap = array('email' =>$req->email ,'password'=>$req->password );
            if (Auth::attempt($dangnhap)) {
            return redirect()->action('QuanlytimvieclamController@indexNTD');
            }
            else{
            return redirect()->back()->with('success','Mật khẩu sai hoặc tài khoản này chưa được chấp thuận !');
        }
    }

    //trang đăng ký của nhà tuyển dụng
    public function dangkyNTD()
    {
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $nganhnghe = Nganhnghe::all();
        return view('/nhatuyendung.dangky',compact('khuvuc','nganhnghe','khuvuc_n','nganhnghe_n'));
    }
    public function postdangkyNTD(Request $req)
    {
        $this->validate($req,
        [
        'username'=>'required|email|unique:users,email',
        'password'=>'required|min:6|max:20',


        'ten_cty'=>'required|regex:/(^[\pL0-9 ]+$)/u|max:255',
        'email_cty'=>'required|email',
        'sdt_cty'=>'required|regex:/(0)[0-9]{9}/',
        'diachi_cty'=>'required|regex:/(^[\pL0-9 ,]+$)/u|max:255',
        'id_kv'=>'required',
        'id_nn'=>'required',
        'mota_cty'=>'required',
        'logo_cty'=>'required',
        'ten_ndk'=>'required|regex:/(^[\pL0-9 ]+$)/u|max:255',
        'chucvu_ndk'=>'required|regex:/(^[\pL0-9 ]+$)/u|max:255',
        'sdt_ndk'=>'required|regex:/(0)[0-9]{9}/',
        'diachi_ndk'=>'required|regex:/(^[\pL0-9 ,]+$)/u|max:255',
        ],[
            'ten_cty.regex'=>'Không được nhập ký tự đặc biệt.',
            'diachi_cty.regex'=>'Không được nhập ký tự đặc biệt.',
            'ten_ndk.regex'=>'Không được nhập ký tự đặc biệt.',
            'chucvu_ndk.regex'=>'Không được nhập ký tự đặc biệt.',
            'diachi_ndk.regex'=>'Không được nhập ký tự đặc biệt.',
        ]);

        $logo='';
        if ($req->hasfile('logo_cty')) 
        {
            $this->validate($req, 
            //hàm kiểm tra dữ liệu
            [
            'logo_cty' => 'mimes:jpg,png,jpeg,gif|max:2048',
            ],
            [
            'logo_cty.mimes' => ' Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png .gif',
            'logo_cty.max' => 'Hình ảnh giới hạn dung lượng không quá 2M',
            ]);

            $file = $req->file('logo_cty');
            $logo= $file->getClientOriginalName();
            $destinationPath= public_path('static\assets\images\logo');
            $file->move($destinationPath, $logo);
        };



        $users = new User();
        $users->email=$req->input('username');
        $users->name=$req->ten_cty;
        $users->password= Hash::make($req->password);
        $users->level="2";
        $users->save();

        $cty = new Cti();
        $cty->id=$users->id;
        $cty->ten_cty=$req->input('ten_cty');
        $cty->email=$req->input('email_cty');
        $cty->sdt=$req->input('sdt_cty');
        $cty->diachi=$req->input('diachi_cty');
        $cty->id_kv=$req->input('id_kv');
        $cty->id_nn=$req->input('id_nn');
        $cty->mota_cty=$req->input('mota_cty');
        $cty->logo=$logo;
        $cty->save();
        
        $nhatuyendung = new Nhatuyendung();
        $nhatuyendung->id=$users->id;
        $nhatuyendung->id_user=$users->id;
        $nhatuyendung->id_cty=$users->id;
        $nhatuyendung->ten_ndk=$req->input('ten_ndk');
        $nhatuyendung->chucvu_ndk=$req->input('chucvu_ndk');
        $nhatuyendung->sdt_ndk=$req->input('sdt_ndk');
        $nhatuyendung->diachi_ndk=$req->input('diachi_ndk');      
        $nhatuyendung->save();

        return redirect()->action('QuanlytimvieclamController@getdangnhapNTD')->with('success','Đăng ký thành công');
    }

    //trang của nhà tuyển dụng sau khi đăng nhập
    public function indexNTD()
    {
        $id = Auth::user()->id;
        $nhatuyendung = Nhatuyendung::where('id_user',$id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        $congty = Cti::find($id);
        $vieclam = Vieclam::where('id_cty',$id)->get();
        $ungtuyen = Ungtuyen::where('id_ntd',$id)->get();
        return view('nhatuyendung.index',compact('nhatuyendung','cty','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon','cty1','congty','vieclam','ungtuyen'));
    }
    //cập nhập hồ sơ nhà tuyển dụng
    public function capnhaphosoNTD(Request $req)
    {
        $this->validate($req,
        [
        
        'ten_cty'=>'required|regex:/(^[\pL0-9 , -]+$)/u',
        'email_cty'=>'required|email',
        'sdt_cty'=>'required|min:10|max:10',
        'diachi_cty'=>'required|regex:/(^[\pL0-9 ,]+$)/u',
        'id_kv'=>'required',
        'ten_ndk'=>'required|regex:/(^[\pL0-9 ]+$)/u',
        'chucvu_ndk'=>'required|regex:/(^[\pL0-9 ]+$)/u',
        'sdt_ndk'=>'required|min:10|max:10',
        'diachi_ndk'=>'required|regex:/(^[\pL0-9 ,]+$)/u',
        ],
        [
        'ten_cty.regex'=>'Không được nhập ký tự đặc biệt.',
        'diachi_cty.regex'=>'Không được nhập ký tự đặc biệt.',
        'ten_ndk.regex'=>'Không được nhập ký tự đặc biệt.',
        'chucvu_ndk.regex'=>'Không được nhập ký tự đặc biệt.',
        'diachi_ndk.regex'=>'Không được nhập ký tự đặc biệt.',
        'ten_cty.required'=>'Vui lòng nhập tên công ty',
        'email_cty.required'=>'Vui lòng nhập email công ty',
        'sdt_cty.required'=>'Vui lòng nhập số điện thoại công ty',
        'sdt_cty.min'=>'Số điện thoại không nhỏ hơn :min',
        'sdt_cty.max'=>'Số điện thoại không lớn hơn :max',
        'diachi_cty.required'=>'Vui lòng nhập địa chỉ công ty',
        'id_kv.required'=>'Vui lòng chọn khu vực',
        'ten_ndk.required'=>'Vui lòng nhập tên người đăng ký',
        'ten_ndk.string'=>'Tên không được nhập số',
        'chucvu_ndk.required'=>'Vui lòng nhập chức vụ',
        'sdt_ndk.required'=>'Vui lòng nhập số điện thoại cá nhân',
        'sdt_ndk.min'=>'Số điện thoại không nhỏ hơn :min',
        'sdt_ndk.max'=>'Số điện thoại không lớn hơn :max',
        'diachi_ndk.required'=>'Vui lòng nhập địa chỉ',

        'email_cty.email'=>'Không đúng định dạng email',
        ]);

        $id_cty = Auth::user()->id;

        $cty = Cti::find($id_cty);
        $cty->ten_cty = $req->ten_cty;
        $cty->email = $req->email_cty;
        $cty->sdt = $req->sdt_cty;
        $cty->diachi = $req->diachi_cty;
        $cty->id_kv = $req->id_kv;
        $cty->id_nn = $req->id_nn;
        $cty->mota_cty = $req->mota_cty;
        $cty->save();

        $id_user = Auth::user()->id;
        $user = User::find($id_user);
        $user->name = $cty->ten_cty;
        $user->save();

        $id = $id_user;
        $nhatuyendung = Nhatuyendung::find($id_user);
        $nhatuyendung->ten_ndk = $req->ten_ndk;
        $nhatuyendung->chucvu_ndk = $req->chucvu_ndk;
        $nhatuyendung->sdt_ndk = $req->sdt_ndk;
        $nhatuyendung->diachi_ndk = $req->diachi_ndk;
        $nhatuyendung->save();

        
        return redirect()->back()->with('success','Đã cập nhập hồ sơ');
    }
    //trang việc làm đã đăng
    public function vieclamdadang()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
        }
        $nhatuyendung = Nhatuyendung::where('id_user',Auth::user()->id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        $vieclam = Vieclam::where('id_cty',$id)->orderByDesc('id')->get();
        $congty = Cti::find($id);
        return view('nhatuyendung.vieclam.vieclamdadang',compact('nhatuyendung','cty','cty1','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon','vieclam','congty'));
    }
    //xem chi tiết việc làm đã đăng
    public function xemVL($id)
    {
        
        $vieclam = Vieclam::find($id);
        $nhatuyendung = Nhatuyendung::where('id_user',Auth::user()->id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        $congty = Cti::find(Auth::user()->id);
        return view('nhatuyendung.vieclam.xem',compact('vieclam','nhatuyendung','cty','cty1','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon','congty'));
    }
    //sửa việc làm đã đăng
    public function suaVL($id)
    {
        
        $vieclam = Vieclam::find($id);
        $nhatuyendung = Nhatuyendung::where('id_user',Auth::user()->id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        $congty = Cti::find(Auth::user()->id);
        return view('nhatuyendung.vieclam.sua',compact('vieclam','nhatuyendung','cty','cty1','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon','congty'));
    }
    public function postsuaVL(Request $req,$id)
    {
        
        $this->validate($req,
        [
        'ten_vl'=>'required|regex:/(^[\pL0-9 , ]+$)/u',
        'mota'=>'required',
        'yeucau'=>'required',
        'diachi'=>'required|regex:/(^[\pL0-9 , ]+$)/u',
        'soluong'=>'required',
        'kinhnghiem'=>'required',
        'mucluong'=>'required',
        'ngayhethang'=>'required',
        'vitri'=>'required',
        'id_nn'=>'required',
        'tinhchat'=>'required',
        'bangcap'=>'required',
        'chucvu'=>'required',
        'gioitinh'=>'required',
        'tuoi'=>'required|regex:/[0-9]/',
        ],
        [

        'ten_vl.regex'=>'Không được nhập ký tự đặc biệt.', 
        'diachi.regex'=>'Không được nhập ký tự đặc biệt.',
        'tuoi.regex'=>'Định dạng không hợp lệ.',    
        'ten_vl.required'=>'Vui lòng nhập tiêu đề',
        'mota.required'=>'Vui lòng nhập mô tả',
        'yeucau.required'=>'Vui lòng nhập yêu cầu',
        'diachi.required'=>'Vui lòng nhập địa điểm làm việc',
        'soluong.required'=>'Vui lòng nhập số lượng',
        'kinhnghiem.required'=>'Vui lòng nhập kinh nghiệm',
        'mucluong.required'=>'Vui lòng nhập mức lương',
        'ngayhethang.required'=>'Vui lòng nhập ngày hết hạn bài đăng',
        'vitri.required'=>'Vui lòng chọn vị trí công việc',
        'id_nn.required'=>'Vui lòng chọn ngành nghề chuyên môn',
        'tinhchat.required'=>'Vui lòng chọn tính chất công việc',
        'bangcap.required'=>'Vui lòng chọn bằng cấp',
        'chucvu.required'=>'Vui lòng chọn chức vụ công việc',
        'gioitinh.required'=>'Vui lòng nhập giới tính',
        'tuoi.required'=>'Vui lòng nhập tuổi',
        
        ]);

        $id_cty = Auth::user()->id;        

        $vieclam = Vieclam::find($id);
        $vieclam->ten_vl = $req->ten_vl;
        $vieclam->id_cty = $id_cty;
        $vieclam->id_nn = $req->id_nn; 
        $vieclam->id_kv = $req->id_kv;        
        $vieclam->ngayhethang = $req->ngayhethang;
        $vieclam->mucluong = $req->mucluong;
        $vieclam->tinhchat = $req->tinhchat;
        $vieclam->mota = $req->mota;
        $vieclam->yeucau = $req->yeucau;
        $vieclam->soluong = $req->soluong;
        $vieclam->diachi = $req->diachi;
        $vieclam->bangcap = $req->bangcap;
        $vieclam->kinhnghiem = $req->kinhnghiem;
        $vieclam->mucluong = $req->mucluong;
        $vieclam->vitri = $req->vitri;
        $vieclam->chucvu = $req->chucvu;
        $vieclam->gioitinh = $req->gioitinh;
        $vieclam->tuoi = $req->tuoi;
        $vieclam->save();
        return redirect()->route('vieclamdadang')->with('success','Đã cập nhập');

    }

    //xóa việc làm
    public function xoaVL($id)
    {
        $xoa = Vieclam::find($id);
        $xoa->delete();
        return redirect()->back()->with('success','Đã xóa.');
    }

    //thêm hình ảnh
    public function themhinh($id)
    {
        
        $hinh = Cti::find($id);
        $nhatuyendung = Nhatuyendung::where('id_user',Auth::user()->id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        $congty = Cti::find(Auth::user()->id);
        return view('nhatuyendung.themhinh',compact('hinh','nhatuyendung','cty','cty1','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon','congty'));
    }
    public function postthemhinh(Request $req,$id)
    {

        
        $hinhanh='';
        if ($req->hasfile('banner')) 
        {
            $this->validate($req, 
            //hàm kiểm tra dữ liệu
            [
            'banner' => 'mimes:jpg,png,jpeg,gif|max:200048',
            ],
            [
            'banner.mimes' => ' Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png .gif',
            'banner.max' => 'Hình ảnh giới hạn dung lượng không quá 2G',
            ]);

            $file = $req->file('banner');
            $hinhanh= $file->getClientOriginalName();
            $destinationPath= public_path('static\assets\images\banner');
            $file->move($destinationPath, $hinhanh);
        };
        $hinhanh1='';
        if ($req->hasfile('logo')) 
        {
            $this->validate($req, 
            //hàm kiểm tra dữ liệu
            [
            'logo' => 'mimes:jpg,png,jpeg,gif|max:200048',
            ],
            [
            'logo.mimes' => ' Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png .gif',
            'logo.max' => 'Hình ảnh giới hạn dung lượng không quá 2G',
            ]);

            $file = $req->file('logo');
            $hinhanh1= $file->getClientOriginalName();
            $destinationPath= public_path('static\assets\images\logo');
            $file->move($destinationPath, $hinhanh1);
        };

        $cty = Cti::find($id);
        if ($hinhanh=="") {
            $hinhanh=$cty->banner;
        }
        $cty = Cti::find($id);
        if ($hinhanh1=="") {
            $hinhanh1=$cty->logo;
        }
        $cty->logo=$hinhanh1;
        $cty->banner=$hinhanh;
        $cty->save();
        return redirect()->route('indexNTD')->with('success','Đã cập nhập.');
    }
    
    //trang hồ sơ ứng viên
    public function hosoungvien()
    {
        $nhatuyendung = Nhatuyendung::where('id_user',Auth::user()->id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        $vieclam = Vieclam::all();
        $stt = 1;
        $id_ntd = Auth::user()->id;
        $hoso = Ungtuyen::where('id_ntd',$id_ntd)->get();
        $congty = Cti::find(Auth::user()->id);
        return view('nhatuyendung.vieclam.hosoungvien',compact('stt','hoso','nhatuyendung','cty','cty1','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon','vieclam','congty'));
    }

    //duyệt hồ sơ ứng viên
    public function duyethosoungvien($id)
    {
        Ungtuyen::where('id',$id)->update(['trangthai'=>1]);
        return redirect()->back()->with('success','Đã duyệt');
    }

    public function chitiethosoungvien($id)
    {
        $nhatuyendung = Nhatuyendung::where('id_user',Auth::user()->id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        $vieclam = Vieclam::all();
        $congty = Cti::find(Auth::user()->id);
        $chitiet = Ungvien::find($id);
        return view('nhatuyendung.vieclam.chitiethosoungvien',compact('chitiet','nhatuyendung','cty','cty1','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon','vieclam','congty'));
    }

    //tìm kiếm 
    public function timkiem(Request $req)
    {


        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $nganhnghe = Nganhnghe::all();
        $cty = Cti::all();
        $cty1 = Cti::paginate(5);
        //ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->get();

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        $count_vieclam = Vieclam::orwhere('ten_vl','like','%'.$req->ten_vl.'%')
        ->where('trangthai',1)
        ->get();
        $vieclam = Vieclam::orwhere('ten_vl','like','%'.$req->ten_vl.'%')
        ->where('trangthai',1)
        ->paginate(10);

        $loc = Vieclam::where('id_kv',$req->id_kv)
        ->where('id_nn',$req->id_nn)
        ->where('trangthai',1)
        ->get();
        return view('timkiem.ketquatimkiem',compact('loc','vieclam','count_vieclam','khuvuc','khuvuc_n','nganhnghe_n','khuvuc1','nganhnghe','cty','cty1','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }
    //lọc 
    public function loc(Request $req)
    {


        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $khuvuc1 = Khuvuc::paginate(5);
        $nganhnghe = Nganhnghe::all();
        $cty = Cti::all();
        $cty1 = Cti::paginate(5);
        //ngày hiện tại
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayhientai = Vieclam::whereDate('ngaydang', $ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $homqua = Vieclam::whereDate('ngaydang', $homqua )->where('trangthai',1)->get();

        $toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();

        //count
        $count_ngayhientai = Carbon::now('Asia/Ho_Chi_Minh');
        $count_ngayhientai = Vieclam::whereDate('ngaydang', $count_ngayhientai)->where('trangthai',1)->get();
        //ngày hôm qua
        $count_homqua = Carbon::yesterday('Asia/Ho_Chi_Minh');
        $count_homqua = Vieclam::whereDate('ngaydang', $count_homqua )->where('trangthai',1)->get();

        $count_toanthoigian = Vieclam::where('tinhchat','Toàn thời gian')->where('trangthai',1)->get();
        $count_banthoigian = Vieclam::where('tinhchat','Bán thời gian')->where('trangthai',1)->get();
        $count_lamtheogio = Vieclam::where('tinhchat','Làm theo giờ')->where('trangthai',1)->get();
        $count_thuctapsinh = Vieclam::where('tinhchat','Thực tập sinh')->where('trangthai',1)->get();
        $vieclam = Vieclam::orwhere('ten_vl','like','%'.$req->ten_vl.'%')
        ->where('trangthai',1)
        ->orderByDesc('id')
        ->paginate(15);

        $loc = Vieclam::where('id_kv',$req->id_kv)
        ->where('id_nn',$req->id_nn)
        ->where('trangthai',1)
        ->orderByDesc('id')
        ->paginate(15);
        $count_loc = Vieclam::where('id_kv',$req->id_kv)
        ->where('id_nn',$req->id_nn)
        ->where('trangthai',1)
        ->get();
        return view('timkiem.loc',compact('loc','count_loc','vieclam','khuvuc','khuvuc_n','nganhnghe_n','khuvuc1','nganhnghe','cty','cty1','ngayhientai','homqua','toanthoigian','banthoigian','lamtheogio','thuctapsinh','count_ngayhientai','count_homqua','count_toanthoigian','count_banthoigian','count_lamtheogio','count_thuctapsinh'));
    }

        

    

    //trang đăng nhập của admin
    public function dangnhapadmin()
    {
        return view('admin.dangnhap');
    }
    public function postdangnhapadmin(Request $req)
    {
        $this->validate($req,
            [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
            ],
            [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            'password.max'=>'Mật khẩu tối đa 20 kí tự'
            ]
            );
            $dangnhap = array('email' =>$req->email ,'password'=>$req->password );
            if (Auth::attempt($dangnhap)) {
            return redirect()->action('QuanlytimvieclamController@admin');
            }
            else{
            return redirect()->back()->with('success','Đăng nhập không thành công !');
        }
    }

    //trang chủ của admin
    public function admin()
    {
        $tongvieclam = Vieclam::where('trangthai',1)->get();
        $tongviecchoduyet = Vieclam::where('trangthai',0)->get();
        $tongtaikhoan = User::all();

        $stt = 1;
        $vieclam = Vieclam::limit(5)->orderByDesc('id')->get();
        $ListDay = Date::getListdayInMonth();

        $viewData = [
            'vieclam'           =>$vieclam,
            'tongvieclam'       =>$tongvieclam,
            'tongviecchoduyet'  =>$tongviecchoduyet,
            'tongtaikhoan'      =>$tongtaikhoan,
            'ListDay'           =>json_encode($ListDay),
            'stt'               =>$stt
        ];

        
        return view('admin.trangchu',$viewData);
            
    }

    //quản lý việc làm admin
    public function quanlyvieclam()
    {
        $nhatuyendung = Nhatuyendung::where('id_user',Auth::user()->id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        $vieclam = Vieclam::orderByDesc('id')->paginate(10);
        return view('admin.quanlivieclam.index',compact('nhatuyendung','cty','cty1','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon','vieclam'));
    }
    //xem chi tiết việc làm đã đăng admin
    public function xemVLadmin($id)
    {
        
        $vieclam = Vieclam::find($id);
        $nhatuyendung = Nhatuyendung::where('id_user',Auth::user()->id)->get();
        $cty = Cti::all();
        $cty1 = Cti::all();
        $khuvuc_n = Khuvuc::paginate(4);
        $nganhnghe_n = Nganhnghe::paginate(4);
        $khuvuc = Khuvuc::all();
        $chuyenmon = Nganhnghe::all();
        return view('admin.quanlivieclam.xem',compact('vieclam','nhatuyendung','cty','cty1','khuvuc','khuvuc_n','nganhnghe_n','chuyenmon'));
    }
    //quản lý user của admin
    public function quanlyuser()
    {
        $user = User::paginate(10);
        return view('admin.quanliuser.index',compact('user'));
    }
    //quản lý user ứng viên
    public function userungvien($id)
    {
        $ungvien = Ungvien::find($id);
        return view('admin.quanliuser.ungvien',compact('ungvien'));
    }
    //quản lý user nhà tuyển dụng
    public function usernhatuyendung($id)
    {
        $nhatuyendung = Nhatuyendung::find($id);
        return view('admin.quanliuser.nhatuyendung',compact('nhatuyendung'));
    }
    //quản lý user admin
    public function useradmin($id)
    {
        $admin = User::find($id);
        return view('admin.quanliuser.admin',compact('admin'));
    }
    //quản lý sửa user admin
    public function suauseradmin($id)
    {
        
        $admin = User::find($id);
        return view('admin.quanliuser.suaadmin',compact('admin'));
    }
    public function postsuauseradmin(Request $req,$id)
    {
        $this->validate($req,
            [
                'name'=>'required|regex:/(^[\pL0-9 ]+$)/u',
                'password'=>'required|min:6|max:100'
            ],
            [
                'name.required'=>'Vui lòng nhập tên',
                'name.regex'=>'Không được nhập ký tự đặc biệt.',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu tối đa 100 kí tự'
            ]);
        $admin1 = User::find($id);
        $admin1->name=$req->name;
        $admin1->password=Hash::make($req->password);
        $admin1->save();
        return redirect()->back()->with('success','Đã cập nhập');
    }
    //xóa user admin
    public function xoauseradmin($id)
    {
        $xoaadmin = User::find($id);
        $xoaadmin->delete();
        return redirect()->back()->with('success','Đã xóa.');
    }
    //xóa user ungvien
    public function xoauserungvien($id)
    {   
                
        $xoa_user = User::find($id);
        $ungtuyen = Ungtuyen::find($id);
        $xoa_uv = Ungvien::find($id);
       
        if ($ungtuyen =  null) {
            $xoa_uv->delete();
            $xoa_user->delete();
            return redirect()->back()->with('success','Đã xóa.'); 
            
        } else {
            return redirect()->back()->with('success','Không thể xóa tài khoản này.');
        }
           
            
        
    }
    //xóa user nhà tuyển dụng
    public function xoauserNTD($id)
    {

        $xoa_ntd = Nhatuyendung::find($id);
        $xoa_cti = Cti::find($id);
        $xoa_user = User::find($id);
        $ungtuyen = Ungtuyen::find($id);
        if ($ungtuyen =  null) {
            $xoa_ntd->delete();
            $xoa_cti->delete();
            $xoa_user->delete();
            return redirect()->back()->with('success','Đã xóa.');
        } else {
            return redirect()->back()->with('success','Không thể xóa tài khoản này.');
        }
    }
    //duyệt bài việc làm 
    public function duyet($id)
    {
        Vieclam::where('id',$id)->update(['trangthai'=>1]);
        return redirect()->back()->with('success','Đã duyệt');
    }

    //trang danh sách khu vực
    public function quanlykhuvuc()
    {

        $khuvuc = Khuvuc::paginate(10);
        
        return view('admin.quanlikhuvuc.index',compact('khuvuc'));
    }
    //thêm khu vực
    public function themkhuvuc(Request $req)
    {
        $this->validate($req,
            [
                'ten_kv' => 'required|unique:khuvucs,ten_kv|regex:/(^[\pL0-9 ]+$)/u'
            ],
            [
                'ten_kv.required' => 'Vui lòng nhập tên khu vực',
                'ten_kv.regex'=>'Không được nhập ký tự đặc biệt'
            ]);
        $khuvuc = new Khuvuc();
        $khuvuc->ten_kv=$req->ten_kv;
        $khuvuc->save();
        return redirect()->back()->with('success','Đã thêm');
    }
    //sửa khu vực
    public function suakhuvuc($id_kv)
    {
        $khuvuc = Khuvuc::where('id_kv',$id_kv)->get();
        return view('admin.quanlikhuvuc.sua',compact('khuvuc','khuvuc_n','nganhnghe_n'));
    }
    public function postsuakhuvuc(Request $req,$id_kv)
    {
        $this->validate($req,
            [
                'ten_kv' => 'required|unique:khuvucs,ten_kv|regex:/(^[\pL0-9 ]+$)/u'
            ],
            [
                'ten_kv.required' => 'Vui lòng nhập tên khu vực',
                'ten_kv.regex' => 'Không được nhập ký tự đặc biệt.'
                
            ]);
        $khuvuc = Khuvuc::where('id_kv',$id_kv)->update(['ten_kv'=>$req->ten_kv]);
        return redirect()->back()->with('success','Đã cập nhập');
    }
    //xóa khu vực
    public function xoakhuvuc($id_kv)
    {
        $kvvl = Vieclam::where('id_kv',$id_kv)->get();
        $kvcti = Cti::where('id_kv',$id_kv)->get();
        $countkvvl = count($kvvl);
        $countkvcti = count($kvcti);
        if ($countkvvl == 0 and $countkvcti == 0) {
            $xoa = Khuvuc::where('id_kv',$id_kv)->delete();
            return redirect()->back()->with('success','Đã xóa.');
        } else {
            return redirect()->back()->with('success','Không thể xóa khu vực này.');
        }    
    }

    //trang danh sách ngành nghề
    public function quanlynganhnghe()
    {
        $nganhnghe = Nganhnghe::paginate(10);
        return view('admin.quanlinganhnghe.index',compact('nganhnghe'));
    }
    //thêm ngành nghề
    public function themnganhnghe(Request $req)
    {
        $this->validate($req,
            [
                'ten_nn' => 'required|unique:nganhnghes,ten_nn|regex:/(^[\pL0-9 ]+$)/u'
            ],
            [
                'ten_nn.required' => 'Vui lòng nhập tên ngành nghề',
                'ten_nn.regex' => 'Không được nhập ký tự đặc biệt.'
            ]);
        $nganhnghe = new Nganhnghe();
        $nganhnghe->ten_nn=$req->ten_nn;
        $nganhnghe->save();
        return redirect()->back()->with('success','Đã thêm');
    }
    //sửa khu vực
    public function suanganhnghe($id_nn)
    {
        $nganhnghe = Nganhnghe::where('id_nn',$id_nn)->get();
        return view('admin.quanlinganhnghe.sua',compact('nganhnghe'));
    }
    public function postsuanganhnghe(Request $req,$id_nn)
    {
        $this->validate($req,
            [
                'ten_nn' => 'required|unique:nganhnghes,ten_nn|regex:/(^[\pL0-9 ]+$)/u'
            ],
            [
                'ten_nn.required' => 'Vui lòng nhập tên ngành nghề',
                'ten_nn.regex' => 'Không được nhập ký tự đặc biệt.'
            ]);
        $nganhnghe = Nganhnghe::where('id_nn',$id_nn)->update(['ten_nn'=>$req->ten_nn]);
        return redirect()->back()->with('success','Đã cập nhập');
    }
    //xóa khu vực
    public function xoanganhnghe($id_nn)
    {
        $nnvl = Vieclam::where('id_nn',$id_nn)->get();
        $count_nnvl = count($nnvl);
        if ($count_nnvl == 0) {
            $xoa = Nganhnghe::where('id_nn',$id_nn)->delete();
            return redirect()->back()->with('success','Đã xóa.');
        } else {
            return redirect()->back()->with('success','Không thể xóa ngành nghề này.');
        }    
    }


    //trang đăng xuất chung
    public function getdangxuat()
    {
        Auth::logout();
        return redirect()->route('quanlytimvieclam.com')->with('success','Đã đăng xuất.');
    }
    public function getdangxuatUV()
    {
        Auth::logout();
        return redirect()->route('dangnhapUV')->with('success','Đã đăng xuất.');
    }
    public function getdangxuatNTD()
    {
        Auth::logout();
        return redirect()->route('getdangnhapNTD')->with('success','Đã đăng xuất.');
    }
    public function getdangxuatAdmin()
    {
        Auth::logout();
        return redirect()->route('dangnhapadmin')->with('success','Đã đăng xuất.');
    }
}
