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
				<h1 class="page-header">Quản lý việc làm</h1>
			</div>
		</div><!--/.row-->
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
                                         
                                        <b>Danh sách việc làm
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
                                                <a href="{{route('xoaVL',$vl->id)}}" class="xoa">
                                                    <i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i>
                                                </a>&nbsp;&nbsp;&nbsp;
                                                <a href="{{route('duyet',$vl->id)}}">
                                                    <i class="fa fa-check" style="color: green"></i>
                                                </a>
                                            @else
                                                <div class="btn-success">
                                                    Đã duyệt
                                                </div>                           
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('xemVLadmin',$vl->id)}}"><button class="btn btn-info">Xem</button></a>                                            
                                        </td>
                                    </tr>
                                    @endforeach                                  
                                  </tbody>
                                </table>
                                    {{$vieclam->links()}}
                                <div class="kv-panel-after"></div>
                                <div class="panel-footer">
                                    <div class="kv-panel-pager">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
		
	</div>	<!--/.main-->
@endsection