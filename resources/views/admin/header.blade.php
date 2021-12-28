	
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a href="{{route('admin')}}"><img src="/static/assets/images/logo/1.png" style="line-height: 50px"></a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			@if(Auth::check())
				<h4 style="color: red"><b>Xin chào:</b> <span style="color: green">{{Auth::user()->name}}</span></h4>
			@endif
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="{{route('admin')}}"><em class="fa fa-dashboard">&nbsp;</em> Trang chủ</a></li>
			<li><a href="{{route('quanlyvieclam')}}"><em class="fa fa-plus">&nbsp;</em> Việc làm</a></li>
			<li><a href="{{route('quanlyuser')}}"><em class="fa fa-plus">&nbsp;</em> User</a></li>
			<li><a href="{{route('quanlykhuvuc')}}"><em class="fa fa-plus">&nbsp;</em> Khu vực</a></li>
			<li><a href="{{route('quanlynganhnghe')}}"><em class="fa fa-plus">&nbsp;</em> Ngành nghề</a></li>
			<li><a href="{{route('dangxuatAdmin')}}" class="dangxuat"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
		</ul>
	</div><!--/.sidebar-->