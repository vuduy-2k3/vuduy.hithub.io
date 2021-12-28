@extends('master')
@section('content')
@include('timkiem.formtimkiem')
<style> .inner-header-title { background: #353535 url(/static/assets/images/banner/{{$vieclam->cti->banner}}); } </style>
        <section class="section wrap-1 padd-top-0">
            <div class="container">
                <div class="row no-mrg">
                    <div class="col-sm-12">
                        <a href="{{route('chitietcongty',$vieclam->id_cty)}}" class="media" title="Xem chi tiết thông tin về Nhà Tuyển Dụng">
                            <div class="inner-header-title">
                                <h5 style="color: black;position: absolute;top: 40%;left: 45%; text-align: center;">
                                    <img src="/static/assets/images/logo/{{$vieclam->cti->logo}}" width="100px" height="100px"><br>
                                    <p></p>
                                    <b style="color: #fff">
                                        Mời bạn đến làm việc ở<br>
                                        {{$vieclam->cti->ten_cty}}                                       
                                    </b>
                                </h5>
                            </div> 
                        </a>
                    </div>

                        <!-- /cover area --> 
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-header page-header-default mb-5">
                                    <div class="breadcrumb-line">
                                        <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                                <a href="{{route('quanlytimvieclam.com')}}" itemtype="https://schema.org/Thing" itemprop="item"> <span itemprop="name"> D-S.com</span> </a> 
                                                <meta itemprop="position" content="1">
                                            </li>
                                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                                <a href="{{route('vieclam')}}" itemprop="item"> <span itemprop="name">Việc làm</span> </a> 
                                                <meta itemprop="position" content="2">
                                            </li>
                                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                                <a href="{{route('vieclamnganhnghe',$vieclam->id_nn)}}" itemtype="https://schema.org/Thing" itemprop="item"> <span itemprop="name">{{$vieclam->nganhnghe->ten_nn}}</span> </a> 
                                                <meta itemprop="position" content="3">
                                            </li>
                                            <li class="active"><span>
                                                {{$vieclam->ten_vl}}
                                            </span></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 pr0 job-detail-col-1" style="border: 1px solid #ccc">
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="media stack-media-on-mobile text-left content-group pb-5">
                                            <div class="media-body-2">
                                                <h3 class="media-heading text-semibold">{{$vieclam->ten_vl}}</h3>
                                                <ul class="list-inline text-muted no-margin">
                                                    <li><i class="glyphicon glyphicon-time"></i>  <b>Ngày hết hạn:</b> <span style="color: red;"> {{$vieclam->ngayhethang}} </span></li>
                                                    <li><i class="glyphicon glyphicon-usd"></i> <b>Mức lương:</b> <span style="color: green">{{$vieclam->mucluong}} USD</span></li>
                                                </ul>
                                            </div>
                                            <div class="media-right media-middle text-nowrap">

                                                <ul class="list-inline no-margin">
                                                    
                                                        @if($hethang)
                                                        <p>Bài viết này đã hết hạn</p>
                                                           <div class="btn bg-blue btn-apply disabled"><i class="glyphicon glyphicon-send"></i> Ứng tuyển ngay</div>
                                                        @else
                                                            @if(Auth::check())
                                                            @if(Auth::user()->level == 1)
                                                        
                                                                <button type="submit" class="btn bg-blue btn-apply "><i class="glyphicon glyphicon-check"></i> Đã ứng tuyển</button>
                                                                @else
                                                                <li class="mt-5">
                                                                    <form id="w0" action="{{route('ungtuyen')}}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="id_vl" value="{{$vieclam->id}}">
                                                                        <input type="hidden" name="id_cty" value="{{$vieclam->id_cty}}">
                                                                        <button type="submit" class="btn bg-blue btn-apply "><i class="glyphicon glyphicon-send"></i> Ứng tuyển ngay</button>
                                                                    </form>
                                                                </li>
                                                                @endif
                                                            @else
                                                                <li class="mt-5">
                                                                    <a href="{{route('dangnhapUV')}}" class="btn bg-blue btn-apply "><i class="glyphicon glyphicon-send"></i> Ứng tuyển ngay
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            
                                                            <li class="mt-5">
                                                                <a href="{{route('dangnhapUV')}}" class="btn bg-blue btn-apply "><i class="glyphicon glyphicon-send"></i> Ứng tuyển ngay
                                                                </a>
                                                            </li>
                                                            @endif
                                                       
                                                        @if($hethang)
                                                            <a href="{{route('dangnhapUV')}}" class="btn-save-job btn btn-default disabled "><i class="glyphicon glyphicon-heart-empty"></i> Lưu lại
                                                                    </a>
                                                        @else
                                                            @if(Auth::check())
                                                            @if(Auth::user()->level == 1)
                                                               
                                                                <button type="submit" class="btn-save-job btn btn-default "><i class="glyphicon glyphicon-heart"></i> Đã lưu</button>
                                                                @else
                                                                <li class="mt-5">
                                                                    <form id="w0" action="{{route('luu')}}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="id_vl" value="{{$vieclam->id}}">
                                                                        <button type="submit" class="btn-save-job btn btn-default "><i class="glyphicon glyphicon-heart-empty"></i> Lưu lại</button>
                                                                    </form>
                                                                </li>
                                                                @endif
                                                            @else
                                                                <li class="mt-5">
                                                                    <a href="{{route('dangnhapUV')}}" class="btn-save-job btn btn-default "><i class="glyphicon glyphicon-heart-empty"></i> Lưu lại
                                                                    </a>
                                                                </li>
                                                            @endif
                                                       
                                                        <li class="mt-5">
                                                                    <a href="{{route('dangnhapUV')}}" class="btn-save-job btn btn-default "><i class="glyphicon glyphicon-heart-empty"></i> Lưu lại
                                                                    </a>
                                                                </li>
                                                        @endif
                                                       
                                                        
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-group">
                                            <h4><b>Mô tả công việc</b></h4>
                                            <div class="clearfix" style="margin-left: 20px">
                                               {!!$vieclam->mota!!}
                                            </div>
                                        </div>
                                        <p></p>
                                        <div class="content-group">
                                            <h4><b>Yêu cầu công việc</b></h4>
                                            <div class="clearfix" style="margin-left: 20px">
                                                {!!$vieclam->yeucau!!}
                                            </div>
                                        </div>
                                        <p></p>
                                        <div class="content-group">
                                            <div class="box-jobs-info">
                                                <h4><b>Địa điểm làm việc</b></h4>
                                                <div class="margin-top-10">
                                                    <div class="data giaphv">
                                                        <p> <b>➢</b> {{$vieclam->diachi}} (<a title="Xem thêm các việc làm tại {{$vieclam->diachi}}" href="{{route('vieclamkhuvuc',$vieclam->id_kv)}}">{{$vieclam->khuvuc->ten_kv}}</a>) </p>
                                                    </div>
                                                </div>
                                                <p></p>
                                                <h4><b>Ngành nghề</b></h4>
                                                <div class="list">  
                                                    <a class="btn btn-xs btn-default" title="Xem thêm các việc làm với ngành nghề {{$vieclam->nganhnghe->ten_nn}}" href="{{route('vieclamnganhnghe',$vieclam->id_nn)}}">{{$vieclam->nganhnghe->ten_nn}}</a>
                                                </div>
                                                <p></p>
                                                <h4><b>Tính chất công việc</b></h4>
                                                <p>  <a class="btn btn-xs btn-default" href="{{route('vieclamtoanthoigian')}}" title="Xem thêm các việc làm {{$vieclam->tinhchat}}">{{$vieclam->tinhchat}}</a>  </p>
                                                <p></p>
                                                <h4><b>Vị trí công việc</b></h4>
                                                <p><li>{{$vieclam->vitri}}</li></p>
                                                <p></p>
                                                <h4><b>Yêu cầu về bằng cấp</b></h4>
                                                <p><li>{{$vieclam->bangcap}}</li></p>
                                                <p></p>
                                                <h4><b>Yêu cầu kinh nghiệm</b></h4>
                                                <p><li>{{$vieclam->kinhnghiem}}</li></p>
                                                <p></p>
                                                <h4><b>Số lượng</b></h4>
                                                <p><li>{{$vieclam->soluong}} người</li></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 job-detail-col-2" style="border: 1px solid #ccc">
                                <div class="fixme">
                                    <div class="panel panel-flat">
                                        <div class="panel-body">
                                            <div class="media stack-media-on-mobile text-left content-group">
                                                <div class="media-body">
                                                    <a class="name" title="Xem chi tiết thông tin về Nhà Tuyển Dụng" href="{{route('chitietcongty',$vieclam->id_cty)}}">
                                                        <h3 class="media-heading text-grey-600 text-semibold text-uppercase text-bold mb-5">{{$vieclam->cti->ten_cty}}</h3>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="company-info text-grey">
                                                <p><i class="glyphicon glyphicon-map-marker"></i> {{$vieclam->cti->diachi}} </p>
                                                <p><i class="glyphicon glyphicon-phone"></i> {{$vieclam->cti->sdt}}</p>
                                                <p><i class="glyphicon glyphicon-envelope"></i>  {{$vieclam->cti->email}}</p>
                                                <p><i class="glyphicon glyphicon-user"></i> >500 nhân viên</p>
                                                
                                                <img src="/static/assets/images/banner/{{$vieclam->cti->banner}}" width="100%" height="100%" alt="{{$vieclam->cti->ten_cty}}" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hide section-unica-course col-sm-12 job-detail-col-3">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title text-uppercase"><a target="_blank" href="https://jobsgo.unica.vn/" rel="nofollow">Khóa học <span class="text-blue-700-bk">đề xuất</span> </a></h6>
                                        <div class="heading-elements"><a target="_blank" href="https://jobsgo.unica.vn/" rel="nofollow" class="heading-text text-blue-700">Xem thêm →</a></div>
                                    </div>
                                    <div class="row unica-course"></div>
                                </div>
                            </div>
                            <script> window.addEventListener('load', function () { $(function () { unicaCourse('302,212,141,'); }) }); </script> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
    @endsection