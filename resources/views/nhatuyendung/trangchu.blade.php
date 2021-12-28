@extends('nhatuyendung.master')
@section('content')        
        <header class="header-area overlay full-height relative v-center" id="home-page">
            <!--<div class="absolute anlge-bg"></div>--> 
            <div class="container">
                <div class="row v-center">
                    <div class="col-xs-12 col-md-5 header-text">
                        <h2>Tìm nhân sự <span>chất lượng</span> theo cách hoàn toàn mới!</h2>
                        <p><strong>D-S.com</strong> giúp bạn tìm được nhân sự phù hợp thật nhanh và hiệu quả. Hệ thống <strong>D-S.com</strong> tìm kiếm thông minh và chủ động gợi ý các ứng viên thích hợp, đồng thời tự động hoá quy trình quản lý ứng viên. </p>
                        <a href="#about-us" class="button white">Tìm hiểu thêm</a>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-7 text-right">
                        <div class="screen-box screen-slider">
                            <div class="item"><img src="/static/assets/images/banner/3.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section-padding gray-bg" id="client-page">
            <div class="container">
                <div class="row mt-10">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                        <div class="page-title">
                            <h2><a href="{{route('congty')}}" target="_blank" style="color:#515656" title="Xem thêm các Nhà Tuyển Dụng">Nhà Tuyển Dụng tiêu biểu</a></h2>
                        </div>
                    </div>
                </div>                
                <div class="row text-center">                    
                    <div class="col-xs-12">
                        @foreach($cty as $ct)
                        <div class="col-md-2" style="border: 1px solid #ccc; width: 150px;height: 150px">
                            <a href="" target="_blank">
                                <img src="/static/assets/images/logo/{{$ct->logo}}"  alt="{{$ct->ten_cty}}" title="{{$ct->ten_cty}}"  width="150px" height="150px">
                            </a>
                        </div>
                        @endforeach
                    </div>                   
                </div>                
            </div>
        </section>
        <section class="angle-bg sky-bg section-padding" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active row">
                                    <div class="v-center">
                                        <div class="col-xs-12 col-md-3">
                                            <div class="caption-title mb-30" data-animation="animated fadeInUp">
                                                <h3>Hệ thống chủ động tìm & gợi ý ứng viên</h3>
                                            </div>
                                            <div class="caption-desc" data-animation="animated fadeInUp">
                                                <p>Từ việc phân tích & thấu hiểu profile doanh nghiệp và từng D-S.com đăng tuyển, D-S.com chủ động tìm kiếm & mang về cho bạn các ứng viên phù hợp nhất. Mỗi khi có ứng viên tiềm năng gia nhập hệ thống.</p>
                                            </div>
                                            <div class="caption-button" data-animation="animated fadeInUp"></div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="caption-title mb-30" data-animation="animated fadeInUp">
                                                <h3>Tự động hoá quy trình quản lý ứng viên</h3>
                                            </div>
                                            <div class="caption-desc" data-animation="animated fadeInUp">
                                                <p>Cho phép bạn quản lý toàn bộ các D-S.com đăng tuyển và ứng viên rất chi tiết và hiệu quả. <br> Tự động hoá việc chăm sóc ứng viên, từ việc gửi các thông báo kết quả, cho đến việc yêu cầu thêm thông tin hồ sơ.</p>
                                            </div>
                                            <div class="caption-button" data-animation="animated fadeInUp"></div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="caption-title mb-30" data-animation="animated fadeInUp">
                                                <h3>Chat trực tiếp với ứng viên</h3>
                                            </div>
                                            <div class="caption-desc" data-animation="animated fadeInUp">
                                                <p>Bạn có thể mở & khoá kênh giao tiếp với ứng viên để có được thông tin nhanh gọn. <br> Chức năng chat được thiết kế thông minh để ứng viên không thể làm phiền đến bạn khi chưa được cho phép. </p>
                                            </div>
                                            <div class="caption-button" data-animation="animated fadeInUp"></div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="caption-title mb-30" data-animation="animated fadeInUp">
                                                <h3>Xây dựng thương hiệu hiệu quả</h3>
                                            </div>
                                            <div class="caption-desc" data-animation="animated fadeInUp">
                                                <p> Thương hiệu doanh nghiệp bạn được xây dựng qua profile ấn tượng trên D-S.com. <br> Hàng nghìn ứng viên biết đến môi trường làm việc, văn hoá, cũng như business của doanh nghiệp bạn.</p>
                                            </div>
                                            <div class="caption-button" data-animation="animated fadeInUp"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gray-bg section-padding" >
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                        <div class="page-title">
                            <h2>VỀ CHÚNG TÔI</h2>
                            <p>D-S.com - Kênh thông tin tuyển dụng và việc làm dành cho mọi Doanh nghiệp và Ứng viên. Chúng tôi tin tưởng sẽ đem lại “HY VỌNG” cho Doanh nghiệp tìm kiếm nhân tài và cho Ứng viên tìm kiếm cơ hội nghề nghiệp. Với 2 hệ thống: Website dành cho Nhà Tuyển Dụng và Ứng dụng (Application) dành cho Người Tìm Việc, D-S.com sẽ mang lại những trải nghiệm mới mẻ, thú vị; kết nối ước mơ chinh phục công việc của mọi nhân tài và giúp doanh nghiệp xây dựng đội ngũ nhân sự vững mạnh.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="box-icon"><i class="fa fa-desktop"></i></div>
                            <h4>Website</h4>
                            <p>Website hỗ trợ Nhà Tuyển Dụng tìm kiếm nhân sự, quản lý công việc, ứng viên, xây dựng nguồn dữ liệu phong phú.</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="box-icon"><i class="fa fa-mobile"></i></div>
                            <h4>Mobile</h4>
                            <p>Ứng dụng tìm kiếm việc làm giúp Người Tìm Việc tiếp cận được công việc phù hợp nhất ở mọi nơi và mọi thời điểm.</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="box-icon"><i class="fa fa-suitcase"></i></div>
                            <h4>Ngành nghề tập trung</h4>
                            <p class="more"> Với việc chuyên sâu vào mảng tuyển dụng và tìm kiếm việc làm của 3 lĩnh vực: Công nghệ thông tin, Quảng cáo trực tuyến, PR - Marketing, Người Tìm việc hay Nhà Tuyển dụng sẽ kết nối được đúng với đối tượng, phù hợp với nhu cầu. </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="box-icon"><i class="fa fa-bookmark"></i></div>
                            <h4>Tiết kiệm chi phí</h4>
                            <p>Tiết kiệm chi phí, thời gian, đạt được hiệu quả, đáp ứng được mọi nhu cầu tìm việc và tìm nhân tài.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
        