<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
            <div class="container">
                <!--Logo--> 
                <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a href="{{route('quanlytimvieclam.com')}}" class="navbar-brand logo"> <img src="/static/assets/images/logo/1.png" alt="">  </a></div>
                <!--Logo/--> 
                <nav class="collapse navbar-collapse" id="primary-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home-page">Giới thiệu</a></li>
                        <li><a href="#client-page">Nhà tuyển dụng</a></li>
                        @if(Auth::check())
                            @if(Auth::user()->level == 2)
                                <li><a href="{{route('indexNTD')}}" class="signin" style="width: 200px;overflow: hidden;white-space: nowrap; text-overflow: ellipsis;"><b style="color: #fff">XIN CHÀO</b>: {{Auth::user()->name}} </a></li>
                                <li><a href="{{route('dangxuat')}}" class="signin">ĐĂNG XUẤT</a></li>
                              @else
                                <li><a href="{{route('dangnhapNTD')}}" class="signin">ĐĂNG NHẬP </a></li>
                                <li><a href="{{route('dangkyNTD')}}" class="signin">ĐĂNG KÝ </a></li>
                              @endif
                        @else
                        <li><a href="{{route('dangnhapNTD')}}">Đăng nhập</a></li>
                        <li class="sign-in"><a href="{{route('dangkyNTD')}}">Đăng ký</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>