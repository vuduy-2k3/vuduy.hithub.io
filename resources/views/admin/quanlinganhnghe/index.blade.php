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
                <li class="active">Trang chủ/<span>Quản lý ngành nghề</span></li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý ngành nghề <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</button></h1>
            </div>
            <!-- Thêm khu vực-->
                <div id="id01" class="modall">
                    <form method="POST" id="formJoin" class="modall-contentt animatee" action="{{route('themnganhnghe')}}">
                        @csrf
                        <div class="containerr">
                            <h1 style="text-align: center;">THÊM NGÀNH NGHỀ</h1><br>
                            <div class="col-lg-12">
                                <div class="form-group field-registerform-employer_id required">
                                    <label class="control-label" for="registerform-employer_id">Tên ngành nghề</label>
                                    <input type="text" id="registerform-employer_id" class="form-control" name="ten_nn" placeholder="Nhập tên ngành nghề..." aria-required="true">
                                    @error('ten_nn')
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
                        <div id="colorgb-pjax" class="grid-view hide-resize" data-krajee-grid="kvGridInit_4851d525">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="pull-right">
                                    </div>
                                    <h3 class="panel-title">
                                         
                                        <b>Danh sách ngành nghề
                                        </b>

                                    </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <style type="text/css">
                                    th{
                                        text-align: center;
                                    }
                                    td{
                                        text-align: center;
                                    }
                                </style>
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">STT</th>
                                      <th scope="col">Tên ngành nghề</th>
                                      <th colspan="2">Tùy chọn</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($nganhnghe as $nn)
                                    <tr>                                    
                                        <th scope="row">{{$nn->id_nn}}</th>
                                        <td>{{$nn->ten_nn}}</td>
                                        <td>
                                            <a href="{{route('suanganhnghe',$nn->id_nn)}}"><button class="btn btn-success">Sửa</button></a>
                                        </td>
                                        <td>
                                            <a onclick="return confirm('Xác nhận xóa ngành nghề này ?')" href="{{route('xoanganhnghe',$nn->id_nn)}}"><button class="btn btn-danger">Xóa</button></a>
                                        </td>
                                    </tr>
                                    @endforeach                                  
                                  </tbody>
                                </table>
                                {{$nganhnghe->links()}}
                                <div class="kv-panel-after"></div>
                                <div class="panel-footer">
                                    <div class="kv-panel-pager">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        
    </div>  <!--/.main-->
@endsection