@extends('admin.master')
@section('content')
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Trang chủ/<span>Quản lý user</span>/<span>Ứng viên</span></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý user <a href="{{route('quanlyuser')}}"><button class="btn btn-warning">Trở về</button></a></h1>
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
                                         
                                        <b>Thông tin ứng viên
                                        </b>

                                    </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <style type="text/css">
                                    th{
                                        text-align: center;
                                        width: 30%;
                                    }
                                    td{
                                        text-align: center;
                                    }
                                </style>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Họ và tên</th>
                                            <td><span>{{$ungvien->user->name}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Hình ảnh</th>
                                            <td><span>
                                                <img src="/static/assets/images/logo/{{$ungvien->hinhanh}}" with="50px" height="50px">
                                            </span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Giới tính</th>
                                            <td><span>{{$ungvien->gioitinh}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Ngày sinh</th>
                                            <td><span>{{$ungvien->ngaysinh}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Số điện thoai</th>
                                            <td><span>{{$ungvien->sdt}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Địa chỉ</th>
                                            <td><span>{{$ungvien->diachi}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Kinh nghiệm</th>
                                            <td><span>{{$ungvien->kinhnghiem}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Lương hiện tại</th>
                                            <td><span>{{$ungvien->luonghientai}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Lương mong muốn</th>
                                            <td><span>{{$ungvien->luongmongmuon}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Vị trí làm việc mong muốn</th>
                                            <td><span>{{$ungvien->vitri}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Loại công việc mong muốn</th>
                                            <td><span>{{$ungvien->loaihinh}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Bằng cấp</th>
                                            <td><span>{{$ungvien->bangcap}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Khu vực làm việc mong muốn</th>
                                            <td><span>{{$ungvien->khuvuc}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Giới thiệu bản thân</th>
                                            <td><span>{{$ungvien->ghichu}}</span></td>
                                        </tr>
                                    </thead>
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
		
	</div>	<!--/.main-->
@endsection