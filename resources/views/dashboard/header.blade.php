 <!-- Main navbar -->
        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('quanlytimvieclam.com')}}">
                <img src="/static/assets/images/logo/1.png" alt="D-S.com">
                </a>
                <style>.btn-jobsgo-language{background: transparent; height: 44px; color: #fff !important;}</style>
            </div>
            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li>
                        <a title="Chuyên viên CSKH" href="">
                        Chuyên viên CSKH: <span class="text-bold">D-S.com</span> <i class="icon-phone ml-10 text-orange-300"></i> 0123456789 <i class="icon-envelop ml-10 text-green-300"></i> support.com
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-user">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <img onerror="this.src='https://employer.jobsgo.vn/bolt/assets/images/image.png'" src="" alt="">
                        
                            @if(Auth::check())
                                <span>{{Auth::user()->name}}</span>
                                
                               
                            @else
                                <script type="text/javascript">
                                    alert('bạn chưa đăng nhập');
                                    window.location.href = "{{route('quanlytimvieclam.com')}}"
                                </script>
                            @endif
                        <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dangxuat"><a href="{{route('dangxuat')}}" class="btn-colorgb-jgd" data-reload="true" data-pjax="false" title="Bạn có chắc muốn đăng xuất khỏi hệ thống?"><i class="icon-switch2"></i> Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
        </div>
        <!-- /main navbar -->
        