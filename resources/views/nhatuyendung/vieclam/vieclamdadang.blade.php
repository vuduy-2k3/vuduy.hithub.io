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
                                         
                                        <b>Danh sách việc làm của công ty 
                                            @if(Auth::user())
                                            <span style="color: red">{{Auth::user()->name}}</span>
                                            @endif
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
                                      <th scope="col">Tên việc làm</th>
                                      <th scope="col">Tên công ty</th>
                                      <th scope="col">Ngành nghề chuyên môn</th>
                                      <th scope="col">Ngày đăng</th>
                                      <th scope="col">Trạng thái</th>
                                      <th colspan="2" scope="col">Tùy chọn</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($vieclam as $vl)
                                    <tr>                                    
                                        <th scope="row">{{$vl->id}}</th>
                                        <td>{{$vl->ten_vl}}</td>
                                        <td>{{$vl->cti->ten_cty}}</td>
                                        <td>{{$vl->nganhnghe->ten_nn}}</td>
                                        <td>{{$vl->ngaydang}}</td>
                                        <td>
                                            @if($vl->trangthai == 0)
                                                <div class="btn-danger">
                                                    Chưa được duyệt
                                                </div>
                                            @else
                                                <div class="btn-success">
                                                    Đã được duyệt
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('xemVL',$vl->id)}}"><button class="btn btn-info">Xem</button></a>
                                            <a href="{{route('suaVL',$vl->id)}}"><button class="btn btn-success">Sửa</button></a>                                            
                                        </td>
                                        <td>
                                            <form action="{{route('xoaVL',$vl->id)}}" method="post">
                                                @csrf
                                            <button class="xoa" class="btn btn-danger" type="submit">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach                                  
                                  </tbody>
                                </table>
                                <div class="kv-panel-after"></div>
                                <div class="panel-footer">
                                    <div class="kv-panel-pager">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
            
        </div>
        <!-- /page container -->
        
@endsection