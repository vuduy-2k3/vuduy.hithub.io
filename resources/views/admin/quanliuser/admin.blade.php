@extends('admin.master')
@section('content')
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Trang chủ/<span>Quản lý user</span>/<span>Admin</span></li>
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
                                         
                                        <b>Thông tin admin
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
                                            <td><span>{{$admin->name}}</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <td><span>{{$admin->email}}</span></td>
                                            
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