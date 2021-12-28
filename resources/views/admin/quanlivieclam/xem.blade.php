@extends('admin.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Trang chủ/<span>Quản lý việc làm</span></li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý việc làm <a href="{{route('quanlyvieclam')}}"><button class="btn btn-info">Trở về</button></a></h1>
            </div>
        </div><!--/.row-->
                    <div class="content-wrapper">
                        <div class="col-md-12" style="background-color: #fff">
                            <h3>CHI TIẾT VIỆC LÀM - ID: {{$vieclam->id}}</h3>
                            <div class="col-md-6">
                                <h3>Thông tin cơ bản</h3>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề công việc </label>
                                    <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->ten_vl}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả công việc </label>
                                     <textarea class="form-control" readonly="readonly">{{$vieclam->mota}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Yêu cầu công việc </label>
                                     <textarea class="form-control" readonly="readonly">{{$vieclam->yeucau}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa điểm làm việc </label>
                                    <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->diachi}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Thông tin chi tiết</h3>                                
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số lượng </label>
                                        <input type="number" class="form-control" readonly="readonly" value="{{$vieclam->soluong}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số năm kinh nghiệm </label>
                                        <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->kinhnghiem}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mức lương(USD) </label>
                                        <input type="number" class="form-control" readonly="readonly" value="{{$vieclam->mucluong}}">
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày đăng </label>
                                        <input type="datetime" class="form-control" readonly="readonly" value="{{$vieclam->ngaydang}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí </label>
                                        <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->vitri}}">
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yêu cầu giới tính </label>
                                        <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->gioitinh}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngành nghề chuyên môn </label>
                                        <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->nganhnghe->ten_nn}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tính chất công việc </label>
                                        <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->tinhchat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bằng cấp </label>
                                        <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->bangcap}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày hết hạn </label>
                                        <input type="date" class="form-control" readonly="readonly" value="{{$vieclam->ngayhethang}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chức vụ </label>
                                        <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->chucvu}}">
                                    </div>              
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yêu cầu đồ tuổi </label>
                                        <input type="text" class="form-control" readonly="readonly" value="{{$vieclam->tuoi}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endsection