@extends('dashboard.master')
@section('content') 
<!-- Page header -->
 

        <div class="page-header">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-anchor position-left"></i>
                        D-S.com dành cho Nhà tuyển dụng
                    </h4>
                </div>
                <div class="heading-elements">
                    <div class="heading-btn-group">
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="icon-file-plus text-primary"></i> Đăng bài tuyển dụng mới</button>
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /page header -->
        <!-- Page container -->
        <div class="page-container ">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main sidebar -->
                @include('nhatuyendung.thaotac')
                <!-- /main sidebar -->
                <!-- Main content -->
                <div class="content-wrapper">
                    <form method="POST" id="formJoin" class="modall-contentt animatee" action="{{route('themhinh',Auth::user()->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="containerr">
                            <h1 style="text-align: center;">CẬP NHẬP HÌNH ẢNH</h1><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh (Logo) *</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" value="" name="logo">
                                    @error('logo')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>                                                    
                                    @enderror

                                </div>
                                <p>Hình cũ</p>
                            <img src="/static/assets/images/logo/{{$hinh->logo}}"  width="100px" height="100px">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh (Banner) *</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" value="" name="banner">
                                    @error('banner')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>                                                    
                                    @enderror

                                </div>
                                <p>Hình cũ</p>
                            <img src="/static/assets/images/banner/{{$hinh->banner}}"  width="400px" height="100px">
                        </div>
                        <div style="clear: none;"></div>
                        <div class="containerr" style="background-color:#fff">
                            <button type="submit" class="btn btn-success">Cập nhập</button>
                        </div>
                    </form>
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
            
        </div>
        <!-- /page container -->
        
@endsection