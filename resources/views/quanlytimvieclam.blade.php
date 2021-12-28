@extends('master')
@section('content')
        <section class="intro-banner">
            <div class="colorgb-banner">
                <div class="colorgb-slider-bk">
                    <div class="item">
                        <div class="container">
                            <h1>Việc làm tìm đến bạn mọi lúc, mọi nơi </h1>
                            <h4 style="text-align: center;">Cách tìm việc & nộp hồ sơ hoàn toàn mới</h4>
                            <h4 style="text-align: center;">Cực kỳ đơn giản</h4>
                            <h4 style="text-align: center;">Nhanh chóng</h4>
                        </div>
                        <div class="wrap">
                            <div class="container">
                                <picture class="left-img">
                                    <source srcset="/static/assets/images/banner/1.webp" type="image/webp">
                                    <source srcset="/static/assets/images/banner/1.png" type="image/png">
                                    <img src="/static/assets/images/banner/1.png" alt="D-S.com"> 
                                </picture>
                                <picture class="right-img">
                                    <source srcset="/static/assets/images/banner/2.webp" type="image/webp">
                                    <source srcset="/static/assets/images/banner/3.png" type="image/png">
                                    <img src="/static/assets/images/banner/3.png" alt="D-S.com"> 
                                </picture>
                                <div id="carousel" data-interval="1500" class="carousel hidden-xs slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="/static/assets/images/banner/2.png" alt="D-S.com">
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="#1772BD" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,197.3C384,203,480,181,576,154.7C672,128,768,96,864,101.3C960,107,1056,149,1152,154.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @include('timkiem.formtimkiem')
        </section>
        <section class="white-bg">
            <div class="container">
                <div class="clearfix">
                    <a href="{{route('congty')}}" title="Xem danh sách Nhà tuyển dụng" class="main-heading">
                        <p>Nhà tuyển dụng tiêu biểu</p>
                        <h2>Công ty <span>hàng đầu</span></h2>
                    </a>
                </div>
                <div class="row extra-mrg brows-employer-list">
                    <div class="colorgb-carousel-bk">
                        <div class="item">
                            @foreach($cty as $ct)
                            <div class="col-sm-2 col-xs-6">
                                <div class="grid-view brows-job-list">
                                    <a title="{{$ct->ten_cty}}" href="{{route('chitietcongty',$ct->id)}}">
                                        <div class="brows-job-company-img" >
                                            <img src="/static/assets/images/logo/{{$ct->logo}}"  class="img-responsive lazy" alt="{{$ct->ten_cty}}"/>
                                        </div>
                                        <div class="brows-job-position">
                                            <h3>{{$ct->ten_cty}}</h3>
                                        </div>
                                        <span class="tg-themetag tg-featuretag hidden-xs">Hot</span> 
                                    </a>
                                </div>                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gray-bg brows-job-category job-list list-view">
            <div class="container">
                <div class="clearfix">
                    <a href="" title="Xem danh sách Việc làm đang đăng tuyển" class="main-heading">
                        <p>Các tin đăng nổi bật</p>
                        <h2>Việc làm <span>mới nhất</span></h2>
                    </a>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="colorgb-carousel-bk v2">
                            <div class="item">
                                @foreach($vieclam as $vl)
                                <div class="item-click">
                                    <article class="standard">
                                        <div class="brows-job-list">
                                            <div class="col-sm-12">
                                                <div class="item-fl-box">
                                                    <div class="brows-job-company-img">
                                                        <a href="{{route('chitietvieclam',$vl->id)}}">
                                                            <img src="/static/assets/images/logo/{{$vl->cti->logo}}"  class="img-responsive lazy" alt="{{$vl->cti->ten_cty}}"/>
                                                        </a>
                                                    </div>
                                                    <div class="brows-job-position">
                                                        <h3 style=" width:100%;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">
                                                            <a href="{{route('chitietvieclam',$vl->id)}}" title="{{$vl->ten_vl}}">{{$vl->ten_vl}}</a>
                                                        </h3>
                                                        <p class="font-13" style=" width:100%;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">
                                                            <a title="{{$vl->cti->ten_cty}}" class="font-italic" href="{{route('chitietcongty',$vl->cti->id)}}">{{$vl->cti->ten_cty}}</a>
                                                        </p>
                                                        <p class="font-12" style=" width:100%;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">
                                                            <span><i class="glyphicon glyphicon-map-marker"></i> {{$vl->diachi}}</span> 
                                                            <span class="mrg-l-10 hidden-xs"><i class="glyphicon glyphicon-time"></i> {{$vl->ngayhethang}}</span> 
                                                            <span class="brows-job-sallery"><i class="glyphicon glyphicon-usd"></i> {{$vl->mucluong}} USD</span>
                                                        </p>
                                                        <p class="font-12">
                                                            <span>
                                                                Số lượng: {{$vl->soluong}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="tg-themetag tg-featuretag hot">Hot</span>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="first-feature">
            <div class="container">
                <div class="clearfix">
                    <a href="#" title="Xem danh sách Ngành nghề tuyển dụng" class="main-heading">
                        <p>Việc làm theo ngành nghề</p>
                        <h2>Ngành nghề <span>tuyển dụng</span></h2>
                    </a>
                </div>
                <div class="all-features" >
                    <div class="colorgb-carousel" style="overflow-x:hidden;overflow-y:auto;">                    
                        <div class="item" >
                            @foreach($nganhnghe as $nn)
                            <div class="col-sm-3 col-xs-6 small-padding">
                                <div class="job-feature">
                                    <a href="{{route('vieclamnganhnghe',$nn->id_nn)}}">
                                        <div class="feature-icon"></div>
                                        <div class="feature-caption">
                                            <h5>{{$nn->ten_nn}}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
        @endsection
        