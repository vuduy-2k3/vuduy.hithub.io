<footer class="footer">
            <div class="lg-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <a href="{{route('quanlytimvieclam.com')}}">
                                <picture>
                                    <source srcset="/static/assets/images/logo/1.png" type="image/webp">
                                    <source srcset="/static/assets/images/logo/1.png" type="image/png">
                                    <img src="/static/assets/images/logo/1.png" class="img-responsive" width="180" alt="D-S.com"> 
                                </picture>
                            </a>
                        </div>
                        <div class="col-md-9 co-sm-9 pull-right">
                            <ul>
                                <li><a href="" title="Về chúng tôi">Giới thiệu</a></li>
                                <li><a href="" target="_blank">Quy chế hoạt động</a></li>
                                <li><a href="" target="_blank">Giải quyết tranh chấp</a></li>
                                <li><a href="" title="Điều khoản sử dụng">Điều khoản</a></li>
                                <li><a href="" title="Chính sách bảo mật">Bảo mật</a></li>
                                <li><a target="_blank" href="" title="JobsGO dành cho Nhà tuyển dụng tìm kiếm nhân sự">Dành cho Nhà Tuyển Dụng</a></li>
                                <li><a href="" title="Câu hỏi thường gặp">FAQ</a></li>
                                <li><a href="" target="_blank" title="Tin tức">Blog</a></li>
                                <li><a href="" title="Sơ đồ trang web">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="footer-widget">
                                <h3 class="widgettitle widget-title">CÔNG TY CỔ PHẦN D-S.com</h3>
                                <div class="textwidget">
                                    <p><strong>Văn phòng Miền Bắc:</strong> Tầng 3 tòa G1 <br> Five Star Garden, Thanh Xuân, Hà Nội</p>
                                    <p><strong>Văn phòng Miền Nam:</strong> Lầu 1, 158A Đào Duy Anh <br> Phường 9, Quận Phú Nhuận, TP. Hồ Chí Minh</p>
                                    <p><strong>Email:</strong> <a href="mailto:contact@jobsgo.vn">contact@jobsgo.vn</a></p>
                                    <p><strong>Hotline:</strong> <a href="tel:0899.565.868">0899.565.868</a></p>
                                    <ul class="footer-social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="footer-widget">
                                <h3 class="widgettitle widget-title" title="Việc làm theo địa điểm">Việc theo địa điểm</h3>
                                <div class="textwidget">
                                    <div class="textwidget">
                                        <ul class="footer-navigation">
                                            @foreach($khuvuc_n as $kv)
                                            <li><a href="{{route('vieclamkhuvuc',$kv->id_kv)}}" title="Việc làm tại {{$kv->ten_kv}}">{{$kv->ten_kv}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="footer-widget">
                                <h3 class="widgettitle widget-title" title="Việc làm theo loại hình">Việc theo loại hình</h3>
                                <div class="textwidget">
                                    <ul class="footer-navigation">
                                        <li><a href="{{route('vieclamtoanthoigian')}}" title="Việc làm Toàn thời gian">Toàn thời gian</a></li>
                                        <li><a href="{{route('vieclambanthoigian')}}" title="Việc làm Bán thời gian">Bán thời gian</a></li>
                                        <li><a href="{{route('vieclamtheogio')}}" title="Việc làm Làm theo giờ">Làm theo giờ</a></li>
                                        <li><a href="{{route('vieclamthuctapsinh')}}" title="Việc làm Thực tập sinh">Thực tập sinh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="footer-widget">
                                <h3 class="widgettitle widget-title" title="Việc làm theo ngành nghề">Việc theo ngành nghề</h3>
                                <div class="textwidget">
                                    <ul class="footer-navigation">
                                        @foreach($nganhnghe_n as $nn)
                                            <li><a href="{{route('vieclamnganhnghe',$nn->id_nn)}}" title="Việc làm tại {{$nn->ten_nn}}">{{$nn->ten_nn}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="footer-widget">
                                <h3 class="widgettitle widget-title" title="Việc làm theo Vị trí/Chức vụ">Việc theo vị trí/chức vụ</h3>
                                <div class="textwidget">
                                    <ul class="footer-navigation">
                                        <li><a href="" title="Việc làm Thực tập sinh">Thực tập sinh</a></li>
                                        <li><a href="" title="Việc làm Nhân viên/Chuyên viên">Nhân viên/Chuyên viên</a></li>
                                        <li><a href="" title="Việc làm Trưởng Nhóm/Trưởng Phòng">Trưởng Nhóm/Trưởng Phòng</a></li>
                                        <li><a href="" title="Việc làm Giám đốc/Cấp cao hơn">Giám đốc/Cấp cao hơn</a></li>
                                        <li><a href="" title="Xem tất cả vị trí/chức vụ">Xem tất cả <b>»</b></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10">
                            <p class="pull-left">Số ĐKKD:‎‎ 0108266100, cấp ngày 09/05/2018 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp <br> © 2019 Công ty Cổ phần JobsGO. All Rights Reserved.</p>
                        </div>
                        <div class="col-sm-2">
                            <a href="{{route('quanlytimvieclam.com')}}">
                                <picture>
                                    <source srcset="/static/assets/images/logo/1.png" type="image/webp">
                                    <source srcset="/static/assets/images/logo/1.png" type="image/png">
                                    <img width="160" src="/static/assets/images/logo/1.png" class="img-responsive" alt="D-S.com"> 
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        