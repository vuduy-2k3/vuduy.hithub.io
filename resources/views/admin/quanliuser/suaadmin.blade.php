@extends('admin.master')
@section('content')
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Trang chủ/<span>Quản lý user</span>/<span>Cập nhập</span></li>
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
                                         
                                        <b>Cập nhập admin
                                        </b>

                                    </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="content-wrapper">
                                    <form id="w0" action="{{route('suauseradmin',$admin->id)}}" method="post">
                                        @csrf
                                        <input type="hidden" name="" value="">
                                            <div class="form-group field-loginform-username required">
                                                <label class="control-label" for="loginform-username">Họ và tên</label>
                                                <input type="text" id="loginform-username" class="form-control" name="name" aria-required="true" value="{{$admin->name}}">
                                                @error('name')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>                                   
                                            <div class="form-group field-loginform-username required">
                                                <label class="control-label" for="loginform-username">Email</label>
                                                <input type="text" id="loginform-username" class="form-control" name="email" aria-required="true" value="{{$admin->email}}" readonly="readonly">
                                                @error('email')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group field-loginform-password required">
                                                <label class="control-label" for="loginform-password">Nhập mật khẩu mới</label>
                                                <input type="password" id="loginform-password" class="form-control" name="password" aria-required="true">
                                                @error('password')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="ref" value="/candidate/update-cv">
                                                <button type="submit" class="display-block btn btn-success btn-ladda btn-ladda-spinner btn-ladda-progress" data-style="zoom-out">
                                                <span class="ladda-label text-uppercase">Cập nhập</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

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