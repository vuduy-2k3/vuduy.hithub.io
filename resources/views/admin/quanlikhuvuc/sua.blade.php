@extends('admin.master')
@section('content')
    

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}<br>
        </div>
        @endforeach
        @endif
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Trang chủ/<span>Quản lý khu vực</span></li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý khu vực <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</button></h1>
            </div>
            <!-- Thêm khu vực-->
                <div id="id01" class="modall">
                    <form method="POST" id="formJoin" class="modall-contentt animatee" action="{{route('themkhuvuc')}}">
                        @csrf
                        <div class="containerr">
                            <h1 style="text-align: center;">THÊM KHU VỰC</h1><br>
                            <div class="col-lg-12">
                                <div class="form-group field-registerform-employer_id required">
                                    <label class="control-label" for="registerform-employer_id">Tên khu vực</label>
                                    <input type="text" id="registerform-employer_id" class="form-control" name="ten_kv" placeholder="Nhập tên khu vực..." aria-required="true">
                                    @error('ten_kv')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>                                                    
                                    @enderror
                                </div>
                            </div>
                            <button style="margin-left: 38%" type="submit" class="btn btn-success">Thêm</button>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Thoát</button>
                            <p></p>
                        </div>
                        <div style="clear: none;"></div>
                        
                    </form>
                </div>
        </div>
        <!--/.row-->
        <div id="colorgb-pjax-pjax" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                        <div class="kv-loader-overlay">
                            <div class="kv-loader"></div>
                        </div>
                        @foreach($khuvuc as $kv)
                        <form method="POST" id="formJoin" class="modall-contentt animatee" action="{{route('suakhuvuc',$kv->id_kv)}}">
                        @endforeach
                        @csrf
                        <div class="containerr">
                            <h1 style="text-align: center;">CẬP NHẬP KHU VỰC</h1><br>
                            <div class="col-md-12">
                                <div class="form-group field-registerform-employer_id required">
                                    <label class="control-label" for="registerform-employer_id">Tên khu vực</label>
                                    @foreach($khuvuc as $kv)
                                    <input type="text" id="registerform-employer_id" class="form-control" name="ten_kv" placeholder="Nhập tên khu vực..." aria-required="true" value="{{$kv->ten_kv}}">
                                    @endforeach
                                    @error('ten_kv')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>                                                    
                                    @enderror
                                </div>
                            </div>
                            <button style="margin-left: 38%" type="submit" class="btn btn-success">Cập nhập</button>
                            <a href="{{route('quanlykhuvuc')}}"><button type="button" class="btn btn-danger">Trở về</button></a>
                            <p></p>
                        </div>
                        <div style="clear: none;"></div>
                        
                    </form>
                    </div>
        
    </div>  <!--/.main-->
@endsection