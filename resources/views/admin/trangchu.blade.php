@extends('admin.master')
@section('content')
	@if(Session::has('success'))
<script type="text/javascript">
        alert('{{ Session::get('success')}}'); 
    </script>
        @endif
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Trang chủ</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trang chủ</h1>
			</div>
		</div><!--/.row-->
		
		

		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-5 col-lg-5	 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding">
							<div class="large"></div>
							<div class="text-muted"><span style="color: black">Tổng việc làm</span></div>
						</div>
						<br>
						<h1 style="color: red; font-family: serif;">
							{{count($tongvieclam)}}
						</h1>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding">
							<div class="large"></div>
							<div class="text-muted"><span style="color: black">Tổng tài khoản</span></div>
						</div>
						<br>
						<h1 style="color: red; font-family: serif;">
							{{count($tongtaikhoan)}}
						</h1>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding">
							<div class="large"></div>
							<div class="text-muted"><span style="color: black">Tổng việc làm chờ duyệt</span></div>
						</div>
						<br>
						<h1 style="color: red; font-family: serif;">
							{{count($tongviecchoduyet)}}
						</h1>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<hr>
		<div class="col-md-12">
			<p><b>Danh sách việc làm mới nhất</b></p>
			
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
                                        <th scope="row">{{$stt++}}</th>
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
		<hr>
		</div>

		
		
	</div>	<!--/.main-->



@endsection