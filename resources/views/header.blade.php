       
        <nav class="navbar navbar-default navbar-transparent">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button> 
                <div class="navbar-header" >
                    <a class="navbar-brand" href="{{route('quanlytimvieclam.com')}}" >
                        <picture>
                            <source srcset="/static/assets/images/logo/1.png" type="image/png">
                            <source srcset="/static/assets/images/logo/1.png" type="image/png">
                            <img src="/static/assets/images/logo/1.png" class="logo logo-display" alt="D-S.com"> 
                        </picture>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu" style="color: #fff">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        @if(Auth::check())
                              @if(Auth::user()->level == 1)
                                <li>
                                  <a href="{{route('indexUV')}}" class="signin" style="width: 200px;overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">
                                    <b style="color: #fff;" >XIN CHÀO</b>: {{Auth::user()->name}} </a>
                                </li>
                                <li><a href="{{route('dangxuat')}}" class="signin">ĐĂNG XUẤT</a></li>
                              @else
                                <li><a href="{{route('dangnhapUV')}}" class="signin">ĐĂNG NHẬP </a></li>
                                <li><a href="{{route('dangky')}}" class="signin">ĐĂNG KÝ </a></li>
                              @endif
                            @else
                                <li><a href="{{route('dangnhapUV')}}" class="signin">ĐĂNG NHẬP </a></li>
                                <li><a href="{{route('dangky')}}" class="signin">ĐĂNG KÝ </a></li>

                            @endif
                        <style type="text/css">
                            .timvl input {
                              outline: none;
                            }
                            .timvl input[type=search] {
                              -webkit-appearance: textfield;
                              -webkit-box-sizing: content-box;
                              font-family: inherit;
                              font-size: 100%;
                            }
                            .timvl input::-webkit-search-decoration,
                            .timvl input::-webkit-search-cancel-button {
                              display: none; 
                            }


                            .timvl input[type=search] {
                              background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
                              border: solid 1px #ccc;
                              padding: 9px 10px 9px 32px;
                              width: 50px;
                              
                              -webkit-border-radius: 10em;
                              -moz-border-radius: 10em;
                              border-radius: 10em;
                              
                              -webkit-transition: all .5s;
                              -moz-transition: all .5s;
                              transition: all .5s;
                            }
                            .timvl input[type=search]:focus {
                              width: 200px;
                              background-color: #ccc;
                              border-color: #66CC75;
                              
                              -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
                              -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
                              box-shadow: 0 0 5px rgba(109,207,246,.5);
                            }


                            .timvl input:-moz-placeholder {
                              color: #999;
                            }
                            .timvl input::-webkit-input-placeholder {
                              color: #999;
                            }
                        </style>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="timvl" style="line-height: 40px">
                            <form method="get" id="searchform" action="{{route('timkiem')}}">
                                <input type="search" placeholder="Tìm kiếm việc làm" name="ten_vl">
                            </form>
                        </li>
                        <li><a href="{{route('vieclam')}}" title="Danh sách Việc làm đang đăng tuyển">VIỆC LÀM</a></li>
                        <li><a href="{{route('nhatuyendung')}}" title="Dành cho Nhà tuyển dụng tìm kiếm nhân sự">NHÀ TUYỂN DỤNG</a></li>
                    </ul>
                </div>
            </div>
        </nav>