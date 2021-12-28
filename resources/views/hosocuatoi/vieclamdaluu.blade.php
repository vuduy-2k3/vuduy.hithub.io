@extends('dashboard.master')
@section('content') 
<!-- Page header -->
        <div class="page-header">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-anchor position-left"></i>
                        D-S.com dành cho Ứng viên
                    </h4>
                </div>
                <div class="heading-elements">
                    <div class="heading-btn-group">
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="icon-file-plus text-primary"></i> Cập nhập hồ sơ</button>
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
                @include('hosocuatoi.thaotac')
                <!-- /main sidebar -->
                <!-- Main content -->
                <div class="content-wrapper">
                        <div class="col-md-12" style="background-color: #fff">
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
                                         
                                        <b>Danh sách việc làm đã lưu
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
                                      <th scope="col">Ngày lưu</th>
                                      <th colspan="2" scope="col">Tùy chọn</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($daluu as $ut)
                                    <tr>                                    
                                        <th scope="row">{{$stt++}}</th>
                                        <td><a href="{{route('chitietvieclam',$ut->id_vl)}}">{{$ut->vieclam->ten_vl}}</a></td>
                                        <td>{{$ut->created_at}}</td>
                                        <td>
                                            <a href="{{route('chitietvieclam',$ut->id_vl)}}"><button class="btn btn-info">Xem</button></a>               
                                        </td>
                                        <td>
                                            <form action="{{route('XoaViecLuu',$ut->id)}}" method="post">
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
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
            
        </div>
        <!-- /page container -->
        
@endsection