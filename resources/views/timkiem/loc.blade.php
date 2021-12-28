<!-- This website is like a Rocket, isn't it? Performance optimized by JobsGO Team --><!-- Please send your resume with cover letter to team@jobsgo.vn --> <!DOCTYPE html>  
<html lang="vi-VN">
    <head>
        <title>Tuyển dụng, tìm việc làm </title>
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
        
        <link rel="preload" as="font" type="font/woff" crossorigin="anonymous" href="/static/assets/css/fonts/et-line.woff">
        <link rel="preload" as="font" type="font/woff2" crossorigin="anonymous" href="/static/assets/css/fonts/fontawesome-webfont.woff2">
        <link rel="preload" as="font" type="font/woff2" crossorigin="anonymous" href="/static/assets/css/fonts/glyphicons-halflings-regular.woff2">
        <link rel="stylesheet preload prefetch" as="style" type="text/css" crossorigin="anonymous" href="/static/assets/css/style.min.css">
    </head>
    <body>
        <noscript><img height="1" width="1" src="https://www.facebook.com/tr?id=1031039173679626&ev=PageView&noscript=1"/></noscript>
        <noscript> <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4XCPHD" height="0" width="0" style="display:none;visibility:hidden"></iframe> </noscript>
        @extends('master')
        @section('content')
        @include('timkiem.formtimkiem')
        <section class="section wrap-1">
            <div class="container">
                <div class="row no-mrg">
                    <div class="col-sm-12">
                        <div class="clearfix">
                            <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                    <a href="/" itemtype="https://schema.org/Thing" itemprop="item"> <span itemprop="name"> D-S.com</span> </a> 
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                    <a href="/viec-lam.html" itemtype="https://schema.org/Thing" itemprop="item"> <span itemprop="name">Việc làm</span> </a> 
                                    <meta itemprop="position" content="2">
                                </li>
                                <li class="active"><span class="text-muted">Đang tuyển</span></li>
                            </ol>
                            <div class="visible-xs filter pull-right"><a href="">Bộ lọc <i class="fa fa-filter" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="sidebar-widget padd-top-0 padd-bot-0 mrg-bot-0">
                            <div class="colorgb-container">
                                <div class="row extra-mrg job-list brows-employer-list mrg-bot-10">
                                    <div class="col-sm-9">
                                        <div class="sidebar-widget-title mrg-bot-15">
                                            <h1>Tuyển dụng, tìm việc làm</h1> 
                                            <h4>Có <b style="color: red">{{count($count_loc)}}</b> việc làm được tìm thấy</h4>
                                        </div>
                                        @foreach($loc as $vl)
                                        <div class="clearfix colorgb-carousel-bk v2">
                                            <div class="mrg-bot-0"></div>
                                            <div class="item">
                                                <div class="item-click hot-job hot">
                                                    <article class="article">
                                                        <div class="brows-job-list">
                                                            <div class="col-sm-12">  
                                                                <div class="item-fl-box clearfix">
                                                                    <div class="brows-job-company-img">
                                                                        <a title="{{$vl->ten_vl}}" href="#">
                                                                            <img title="{{$vl->cti->ten_cty}}" src="/static/assets/images/logo/{{$vl->cti->logo}}" alt="{{$vl->cti->ten_cty}}" class="img-responsive lazy">
                                                                        </a>
                                                                    </div>
                                                                    <div class="brows-job-position">
                                                                        <div class="h3">
                                                                            <a href="{{route('chitietvieclam',$vl->id)}}" title="{{$vl->ten_vl}}">{{$vl->ten_vl}}</a>
                                                                        </div>
                                                                        <p class="font-13">
                                                                            <a title="{{$vl->cti->ten_cty}}" class="font-italic" href="#">{{$vl->cti->ten_cty}}</a>
                                                                        </p>
                                                                        <p class="font-12">
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
                                                        
                                                        <div class="tg-themetag tg-featuretag hot-job hot">hot</div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{$loc->links()}}
                                        <div class="clearfix mrg-top-5"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="blog-sidebar">
                                            <div class="sidebar-widget padd-top-0 padd-bot-0">
                                                <h4 class="mrg-bot-5"> Lọc theo thời gian <a href="javascript:void(0)" class="pull-right"> <i class="fa fa-angle-double-down"></i></a></h4>
                                                <ul class="sidebar-list expandible colorgb-job-filter">
                                                    <li class="t1d ">
                                                        <a title="Việc làm 24 giờ qua" href="{{route('vieclamhomnay')}}">
                                                            <div class="txt">Hôm nay</div>
                                                            <span class="small text-muted padd-top-5">
                                                                {{count($count_ngayhientai)}}
                                                            </span> 
                                                        </a>
                                                    </li>
                                                    <li class="t7d ">
                                                        <a title="Việc làm hôm qua" href="{{route('vieclamhomqua')}}">
                                                            <div class="txt">Hôm qua</div>
                                                            <span class="small text-muted padd-top-5">
                                                                {{count($count_homqua)}}
                                                            </span> 
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sidebar-widget padd-top-0 padd-bot-0 mrg-top-25">
                                                <h4 class="mrg-bot-5"> Lọc theo loại hình <a href="javascript:void(0)" class="pull-right"> <i class="fa fa-angle-double-down"></i></a></h4>
                                                <ul class="sidebar-list expandible colorgb-job-filter colorgb-job-type">
                                                    <li class="toan-thoi-gian ">
                                                        <a title="Việc làm toàn thời gian" href="{{route('vieclamtoanthoigian')}}">
                                                            <div class="txt">Toàn thời gian</div>
                                                            <span class="small text-muted padd-top-5">
                                                                {{count($count_toanthoigian)}}
                                                            </span> 
                                                        </a>
                                                    </li>
                                                    <li class="ban-thoi-gian ">
                                                        <a title="Việc làm bán thời gian" href="{{route('vieclambanthoigian')}}">
                                                            <div class="txt">Bán thời gian</div>
                                                            <span class="small text-muted padd-top-5">
                                                                {{count($count_banthoigian)}}
                                                            </span> 
                                                        </a>
                                                    </li>
                                                    <li class="lam-theo-gio ">
                                                        <a title="Việc làm làm theo giờ" href="{{route('vieclamtheogio')}}">
                                                            <div class="txt">Làm theo giờ</div>
                                                            <span class="small text-muted padd-top-5">
                                                                {{count($count_lamtheogio)}}
                                                            </span> 
                                                        </a>
                                                    </li>
                                                    <li class="thuc-tap-sinh ">
                                                        <a title="Việc làm thực tập sinh" href="{{route('vieclamthuctapsinh')}}">
                                                            <div class="txt">Thực tập sinh</div>
                                                            <span class="small text-muted padd-top-5">
                                                                {{count($count_thuctapsinh)}}
                                                            </span> 
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sidebar-widget padd-top-0 padd-bot-0 mrg-top-25">
                                                <h4 class="mrg-bot-5"> Công ty tuyển dụng <a href="javascript:void(0)" class="pull-right"> <i class="fa fa-angle-double-down"></i></a></h4>
                                                <ul class="sidebar-list expandible">
                                                    @foreach($cty1 as $ct)
                                                    <li>
                                                        <a title="Việc làm tại {{$ct->ten_cty}}" href="{{route('vieclamcongty',$ct->id)}}">
                                                            <div class="txt text-capitalize">{{$ct->ten_cty}}</div>
                                                            <span class="small text-muted padd-top-5">
                                                                
                                                            </span> 
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="sidebar-widget padd-top-0 padd-bot-0 mrg-top-25">
                                                <h4 class="mrg-bot-5"> Đề xuất tìm kiếm <a href="javascript:void(0)" class="pull-right"> <i class="fa fa-angle-double-down"></i></a></h4>
                                                <ul class="sidebar-list expandible">
                                                    @foreach($khuvuc1 as $kv)
                                                    <li>
                                                        <a title="Tìm Việc Làm {{$kv->ten_kv}}" href="{{route('vieclamkhuvuc',$kv->id_kv)}}">
                                                            <div class="txt text-capitalize">Tìm Việc Làm {{$kv->ten_kv}}</div>
                                                            <span class="small text-muted padd-top-5"></span> 
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                    
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mrg-top-20">
                        <a rel="nofollow" href="" target="_blank" >
                            <picture>
                                <img src="/static/assets/images/banner/4.jpg" width="100%" class="img-responsive hidden-xs lazy" alt="D-S.com"> 
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @endsection