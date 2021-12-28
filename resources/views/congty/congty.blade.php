@extends('master')
@section('content')
        <link rel="stylesheet" type="text/css" href="/static/assets/css/employer.min.css">
        <section class="inner-header-page inner-header-page video-sec dark">
            <div class="container">
                <form class="bt-form">
                    <div class="padd-15 text-left">
                        <h1>Có {{count($demcty)}} Nhà Tuyển Dụng </h1>
                        <p> Các công ty doanh nghiệp đang tuyển dụng, hàng nghìn công việc được đăng mới mỗi ngày!</p>
                    </div>
                </form>
            </div>
        </section>
        <section class="section wrap-1">
            <div class="container">
                <div class="row no-mrg">
                    <div class="col-sm-12">
                        <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                <a href="{{route('quanlytimvieclam.com')}}" itemtype="https://schema.org/Thing" itemprop="item"> <span itemprop="name"> D-S.com</span> </a> 
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                <a href="{{route('vieclam')}}" itemtype="https://schema.org/Thing" itemprop="item"> <span itemprop="name">Tuyển dụng</span> </a> 
                                <meta itemprop="position" content="2">
                            </li>
                            <li class="active"><span class="text-muted">Danh sách Nhà Tuyển Dụng</span></li>
                        </ol>
                        <div class="sidebar-widget padd-top-0 mrg-bot-0">
                            <div class="colorgb-container">
                                <div class="clearfix">
                                    <h4 class="mrg-bot-0"> Danh sách <span>Nhà tuyển dụng</span> <span class="pull-right font-13 font-normal"> ({{count($demcty)}})</span></h4>
                                </div>
                                <div class="row extra-mrg brows-employer-list mrg-bot-10">
                                    <div class="colorgb-carousel-bk">
                                        @foreach($cty as $ct)
                                        <div class="item">
                                            <div class="col-sm-2 col-xs-6">
                                                <div class="grid-view brows-job-list">
                                                    <a title="{{$ct->ten_cty}}" href="{{route('chitietcongty',$ct->id)}}">
                                                        <div class="brows-job-company-img"><img  src="/static/assets/images/logo/{{$ct->logo}}" class="img-responsive" alt="{{$ct->ten_cty}}"></div>
                                                        <div class="brows-job-position">
                                                            <h3> {{$ct->ten_cty}} </h3>
                                                        </div>
                                                        <span class="tg-themetag tg-featuretag hidden-xs">Hot</span> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="clearfix">
                                     {{$cty->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection