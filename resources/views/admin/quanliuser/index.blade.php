@extends('admin.master')
@section('content')
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Trang chủ/<span>Quản lý user</span></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý user</h1>
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
                                         
                                        <b>Danh sách user
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
                                      <th scope="col">Họ và tên</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Level</th>
                                      <th colspan="2" scope="col">Tùy chọn</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($user as $us)
                                    <tr>                                    
                                        <th scope="row">{{$us->id}}</th>
                                        <td>{{$us->name}}</td>
                                        <td>{{$us->email}}</td>
                                        <td>
                                            @if($us->level == 1)
                                                <a href="{{route('userungvien',$us->id)}}"><button class="btn btn-success">Ứng viên</button></a>
                                            @endif
                                            @if($us->level == 2)
                                                <a href="{{route('usernhatuyendung',$us->id)}}"><button class="btn btn-info">Nhà tuyển dụng</button></a>
                                            @endif
                                            @if($us->level == 3)
                                                <a href="{{route('useradmin',$us->id)}}"><button class="btn btn-warning">Admin</button></a>
                                            @endif
                                                                       
                                            
                                        </td>
                                        <td>
                                            @if($us->level == 3)
                                                <a href="{{route('suauseradmin',$us->id)}}"><button class="btn btn-info">Sửa</button></a>
                                            @endif
                                            @if($us->level == 3)
                                                <a class="xoa" href="{{route('xoauseradmin',$us->id)}}"><button class="btn btn-danger">Xóa</button></a>
                                            @endif
                                            @if($us->level == 1)
                                                <form action="{{route('xoauserungvien',$us->id)}}" method="post">
                                                    @csrf
                                                    <button class="btn btn-danger xoa " type="submit">Xóa</button>
                                                </form>
                                            @endif
                                            @if($us->level == 2)
                                                <form action="{{route('xoauserNTD',$us->id)}}" method="post">
                                                    @csrf
                                                    <button class="btn btn-danger xoa" type="submit">Xóa</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach                                  
                                  </tbody>
                                </table>
                                <div class="kv-panel-after">
                                    {{$user->links()}}
                                </div>
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