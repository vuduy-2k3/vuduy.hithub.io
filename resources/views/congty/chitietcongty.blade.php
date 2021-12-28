@extends('master')
@section('content')        
        <style> .inner-header-title { background: #353535 url(/static/assets/images/banner/{{$cty->banner}}); } </style>
         
        <section class="inner-header-title">
            <div class="container">
                <h1>{{$cty->ten_cty}}</h1>
                <div class="colorgb-bc clearfix detail-desc-caption" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <a href="{{route('quanlytimvieclam.com')}}" itemtype="https://schema.org/Thing" itemprop="item"  style="color: #fff"> 
                            <i class="fa fa-home" aria-hidden="true"></i> 
                            <span itemprop="name">D-S.com</span> 
                        </a> 
                        <meta itemprop="position" content="1">
                        / 
                        <a href="{{route('nhatuyendung')}}" itemtype="https://schema.org/Thing" itemprop="item" style="color: #fff"> 
                            <span itemprop="name">Nhà tuyển dụng</span> 
                        </a> 
                        <meta itemprop="position" content="2">
                        / 
                        <span>
                            {{$cty->ten_cty}}
                        </span>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="detail-desc gray-bg">
            <div class="container white-shadow">
                <div class="row">
                    <div class="detail-pic"><img src="/static/assets/images/logo/{{$cty->logo}}" class="img lazy" alt="{{$cty->ten_cty}}"/></div>
                    
                </div>

                <div class="row bottom-mrg">
                    <div class="col-md-8 col-sm-8">
                        <div class="detail-desc-caption">
                            <h4>{{$cty->ten_cty}}</h4>
                            <span class="designation">Lĩnh vực: {{$cty->nganhnghes->ten_nn}}</span> 
                            <div class="more mh120"> Mô tả: <br />
                                <br />
                                 {{$cty->mota_cty}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="get-touch">
                            <h4>Thông tin liên hệ</h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><span>{{$cty->diachi}}</span></li>
                                <li><i class="fa fa-envelope-o"></i><span>{{$cty->email}}</span></li>
                                <li><i class="fa fa-phone"></i><span><a target="_blank" rel="nofollow" href="http://giaohangtietkiem.vn/">{{$cty->sdt}}</a> </span></li>
                                <li><i class="fa fa-users"></i><span>>500 cán bộ/nhân viên</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row no-padd">
                    <div class="detail pannel-footer">
                        <div class="col-sm-5">
                            <ul class="detail-footer-social">
                                <li><a target="_blank" rel="nofollow" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" rel="nofollow" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" rel="nofollow" href="https://plus.google.com/
                                    "><i class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" rel="nofollow" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-7">
                            <div class="text-right">
                                <div class="advance-detail detail-desc-caption">
                                    <ul>
                                        <li><strong class="j-shared">{{count($demvieclam)}}</strong>Việc làm đã đăng</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container p-0">
            <ul class="nav nav-tabs colorgb-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Tổng quan</a></li>
                <li><a data-toggle="tab" href="#danhgia">Đánh giá </a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="main-heading">
                                <p>Văn hóa công ty</p>
                                <h2>Thư viện <span>hình ảnh</span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="gallery">
                                <div class="col-xs-6 col-sm-4 col-md-3">
                                    <a target="_blank" class="fancybox" rel="ligthbox" href=""> 
                                        <img onerror="this.src='https://jobsgo.vn/media/img/no-image.png'" class="img-responsive lazy" alt="Công Ty Cổ phần Giao Hàng Tiết Kiệm" src="/static/assets/images/banner/{{$cty->banner}}" /> 
                                    </a>
                                </div>
                            </div>
                            <!-- gallery / end --> 
                        </div>
                        <!-- row / end --> 
                    </div>
                </section>
                <a class="visible-xs" target="_blank" href="https://jobsgo.vn/site/download?utm_source=mobile_banner&utm_medium=web"><img style="max-width: 100% !important;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;margin:auto;display:block" alt="Tải app JobsGO" src="/loading.gif" data-src="/media/img/500x100-banner-4.gif" class="img-responsive lazy"></a> 
                <section class="brows-job-category" style="background-color: #f0f8f8">
                    <div class="container">
                        <div class="row">
                            <h2 class="text-center">Có tất cả <strong>{{count($demvieclam)}}</strong> việc làm đã đăng </h2>
                            <h4 class="text-center">(<a target="_blank" title="Xem các việc làm đang đăng tuyển" href="{{route('vieclam')}}">danh sách các việc làm đang tuyển</a>)</h4>
                        </div>
                        <div class="row extra-mrg" >
                            @foreach($vieclam as $vl)
                            <div class="col-md-4 col-sm-6 active">

                                <a  href="{{route('chitietvieclam',$vl->id)}}" class="grid-view brows-job-list">
                                    
                                    <div class="brows-job-company-img">
                                        <img onerror="this.src='/static/assets/images/logo/1.jpg'" src="/static/assets/images/logo/{{$vl->cti->logo}}"  class="img-responsive lazy" alt="Công Ty Cổ phần Giao Hàng Tiết Kiệm"/>
                                    </div>
                                    <div class="brows-job-position">
                                        <h3>{{$vl->ten_vl}}</h3>
                                    </div>

                                    <div class="brows-job-description" style="display: -webkit-box;width: 100%;line-height: 25px;overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 4;-webkit-box-orient: vertical;">
                                        {!!$vl->mota!!} 
                                        <
                                    </div>
                                    

                                    <ul class="grid-view-caption">
                                        <li>
                                            <div class="brows-job-location">
                                                <p><i class="fa fa-map-marker"></i>   {{$vl->khuvuc->ten_kv}}   </p>
                                            </div>
                                        </li>
                                        <li>
                                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i> {{$vl->mucluong}} USD</span></p>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        {{$vieclam->links()}}
                    </div>
                </section>
                
            </div>
        </div>
        <div id="danhgia" class="tab-pane fade active in">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="text-align: center;">
                        <h1 class="text-center">Đánh giá</h1>
                        <h2 class="bold padding-bottom-7"> 4.0 
                            <small>/ 5</small>
                        </h2>
                        <button type="button" style="background: linear-gradient(90deg, #f1c40f 100%, #d8d8d8 100%);" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>  
                        <button type="button" style="background: linear-gradient(90deg, #f1c40f 100%, #d8d8d8 100%);" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>  
                        <button type="button" style="background: linear-gradient(90deg, #f1c40f 100%, #d8d8d8 100%);" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>  
                        <button type="button" style="background: linear-gradient(90deg, #f1c40f 100%, #d8d8d8 100%);" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>  
                        <button type="button" style="background: linear-gradient(90deg, #f1c40f 0%, #d8d8d8 0%);" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>  
                                
                        <br> 
                    </div>                
                </div>
            </div>
        </div>
        <p></p>
   @endsection