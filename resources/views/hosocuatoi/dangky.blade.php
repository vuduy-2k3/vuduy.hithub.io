<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <title>Đăng ký - Dành cho người tìm việc</title>
        <script>
            var baseUrl = '';
            
        </script>
        <link href="/bolt/assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="/bolt/assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
        <link href="/bolt/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/bolt/assets/css/core.min.css" rel="stylesheet" type="text/css">
        <link href="/bolt/assets/css/components.min.css" rel="stylesheet" type="text/css">
        <link href="/bolt/assets/css/colors.min.css" rel="stylesheet" type="text/css">
        <link href="/bolt/assets/css/main.css?colorgb=1.318" rel="stylesheet" type="text/css">
        <link href="/css/v2.css?colorgb=1.318" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/bolt/assets/js/core/libraries/jquery.min.js"></script>
        <script type="text/javascript" src="/bolt/assets/js/core/libraries/bootstrap.min.js"></script>
        <script type="text/javascript" src="/bolt/assets/js/plugins/buttons/spin.min.js"></script>
        <script type="text/javascript" src="/bolt/assets/js/plugins/buttons/ladda.min.js"></script>
        <script type="text/javascript" src="/bolt/assets/js/pages/components_buttons.js"></script>
        <script type="text/javascript" src="/bolt/assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script type="text/javascript" src="/bolt/assets/js/core/app.js?colorgb=1.318"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" />

        @if(Session::has('success'))
                    <script type="text/javascript">
                       alert('{{ Session::get('success')}}');
                    </script>
                    @endif

        <script>
            $(function () {
                $('.styled').uniform();
            })
        </script>
        <style>
            body .has-title.fancybox-title:before {
            content: 'Việc làm đã ứng tuyển: ' !important;
            font-weight: 300;
            }
            .login-container .site-logo {
            position: relative;
            display: block;
            margin: 10px auto 30px;
            width: 170px;
            }
            .card .avatar {
            z-index: 10 !important;
            }
            .site-logo img {
            margin: 10px auto 20px;
            }
            tr td,
            tr td a,
            tr td button {
            font-size: 14px;
            }
            .popover-md {
            width: 190px !important;
            min-width: 100px !important;
            }
        </style>
    </head>
    <body class=" access ">
        <!-- Google Tag Manager (noscript) --> 
        <noscript> <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4XCPHD" height="0" width="0" style="display:none;visibility:hidden"></iframe> </noscript>
        <!-- End Google Tag Manager (noscript) --> <!-- Google Tag Manager --> <script>(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'}); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-W4XCPHD');</script> <!-- End Google Tag Manager --> <!--Start of Tawk.to Script--> 
        
        <script> var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date(); </script> 
        <style>#load-tawkto { width: 60px; height: 60px; position: fixed; bottom: 12px; right: 10px; z-index: 9999999 } #load-tawkto img { width: 60px; height: 60px; cursor: pointer } .fb_dialog_mobile { z-index: 999999997 !important } .fb_customer_chat_bounce_in { z-index: 1000000001 !important }</style>
        <!--End of Tawk.to Script--> <!-- Global site tag (gtag.js) - AdWords: 791019431--> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-791019431"></script> <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-791019431'); </script> 
        <!-- Page container -->
        <div class="page-container login-container">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main content -->
                <div class="content-wrapper">
                    <style>
                        .login-container .login-form {
                        width: 390px;
                        }
                        .form-control {
                        background-color: #fffaf2;
                        }
                        .login-container.page-container {
                        padding-top: 0 !important;
                        margin-top: 0 !important;
                        }
                        @media (max-width: 768px) {
                        .login-container.page-container {
                        padding: 0 10px !important;
                        }
                        html, body {
                        overflow-x: hidden;
                        }
                        .login-container .login-form {
                        width: 100%;
                        }
                        }
                        @media all and (max-width: 768px) {
                        #load-tawkto {
                        display: none;
                        }
                        }
                    </style>
                    
                    
                    
                    <form id="w0" action="" method="post" enctype=multipart/form-data>
                        <input type="hidden" name="" value="">
                        <a title="D-S.com - Trang chủ" href="{{route('quanlytimvieclam.com')}}" class="site-logo">
                        <img src="/static/assets/images/logo/1.png" alt="D-S.com">
                        </a>
                        <div class="signup-container">
                            <div class="panel panel-body signup-form">
                                <div class="row">
                                    <div class="col-md-4 col-md-push-8">
                                        <form  action="{{route('dangky')}}" method="post" autocomplete="off" enctype=multipart/form-data> 
                                            @csrf         
                                            <div class="text-center">
                                                <h3 class="content-group-lg text-uppercase hide">Tạo hồ sơ xin việc
                                                </h3>
                                            </div>

                                            <div class="form-group field-registerform-name requiredr">
                                                <label class="control-label" for="registerform-name">Họ tên</label>
                                                <input type="text" class="form-control" name="name" placeholder="Vũ Đình Duy">
                                                @error('name')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group field-registerform-email required">
                                                <label class="control-label" for="registerform-email">Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="duy@gmail.com">
                                                @error('email')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group field-registerform-password required">
                                                <label class="control-label" for="registerform-password">Mật khẩu</label>
                                                <input type="password" class="form-control" name="password" placeholder="abczyx123">
                                                @error('password')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group field-registerform-password required">
                                                <label class="control-label" for="registerform-password">Hình ảnh</label>
                                                <input type="file" class="form-control" name="hinhanh">
                                                @error('hinhanh')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group field-registerform-password required">
                                                <label class="control-label" for="registerform-password">Giới tính</label>
                                                <select name="gioitinh" class="form-control">
                                                    <option selected="false"></option>
                                                    <option>Nam</option>
                                                    <option>Nữ</option>
                                                    <option>Giới tính khác</option>
                                                </select>
                                                @error('gioitinh')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group field-registerform-password required">
                                                <label class="control-label" for="registerform-password">Ngày sinh</label>
                                                <input type="date" class="form-control" name="ngaysinh" >
                                                @error('ngaysinh')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group field-registerform-password required">
                                                <label class="control-label" for="registerform-password">Số điện thoại</label>
                                                <input type="text" class="form-control" name="sdt" placeholder="0359229731">
                                                @error('sdt')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group field-registerform-password required">
                                                <label class="control-label" for="registerform-password">Địa chỉ</label>
                                                <input type="text" class="form-control" name="diachi" placeholder="Hà Nội">
                                                @error('diachi')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block bg-green btn-lg btn-ladda btn-ladda-spinner btn-ladda-progress text-uppercase" data-style="zoom-out" >
                                                    <span class="ladda-label">Đăng ký</span><span class="ladda-spinner"></span><span class="ladda-spinner"></span>
                                                    <div class="ladda-progress" style="width: 294px;"></div>
                                                </button>
                                            </div>
                                            <div class="content-divider text-muted form-group"><span>Bạn đã có tài khoản?</span></div>
                                            <a href="{{route('dangnhapUV')}}" class="text-size-base btn btn-default btn-block content-group text-uppercase">Đăng nhập</a>
                                        </form>
                                    </div>
                                    <div class="col-md-8 col-md-pull-4">
                                        <div id="carousel" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel" data-slide-to="0" class=""></li>
                                                <li data-target="#carousel" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel" data-slide-to="2" class=""></li>
                                                <li data-target="#carousel" data-slide-to="3" class=""></li>
                                                <li data-target="#carousel" data-slide-to="4" class="active"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item">
                                                    <img class="d-block img-fluid img-responsive" src="/img/signup/1.jpg" alt="slide">
                                                    <div class="carousel-caption d-none d-md-block hidden-xs">
                                                        <div class="banner-text">
                                                            <h2>Tạo CV trong chớp mắt</h2>
                                                            <p>Tạo CV ấn tượng, chọn từ kho CV mẫu được thiết kế chuyên nghiệp, bắt mắt.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img class="d-block img-fluid img-responsive" src="/img/signup/5.jpg" alt="slide">
                                                    <div class="carousel-caption d-none d-md-block hidden-xs">
                                                        <div class="banner-text">
                                                            <h2>Ứng tuyển bằng 1 chạm</h2>
                                                            <p>Kết nối với việc làm phù hợp khả năng và mong muốn của bạn. Hoàn toàn tự động.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img class="d-block img-fluid img-responsive" src="/img/signup/4.jpg" alt="slide">
                                                    <div class="carousel-caption d-none d-md-block hidden-xs">
                                                        <div class="banner-text">
                                                            <h2>Việc làm phù hợp nhất</h2>
                                                            <p>Kết nối với việc làm phù hợp khả năng và mong muốn của bạn. Hoàn toàn tự động.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img class="d-block img-fluid img-responsive" src="/img/signup/2.jpg" alt="slide">
                                                    <div class="carousel-caption d-none d-md-block hidden-xs">
                                                        <div class="banner-text">
                                                            <h2>Chat với Nhà tuyển dụng</h2>
                                                            <p>Tra cứu thông tin nhà tuyển dụng, trò chuyện nhanh qua chat, đặt lịch phỏng vấn ngay trên app...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item active">
                                                    <img class="d-block img-fluid img-responsive" src="/img/signup/3.jpg" alt="slide">
                                                    <div class="carousel-caption d-none d-md-block hidden-xs">
                                                        <div class="banner-text">
                                                            <h2>Nhận phản hồi nhanh</h2>
                                                            <p>Nhận kết quả ứng tuyển, cơ hội việc làm từ các công ty yêu thích mọi lúc, mọi nơi trên di động.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /main content -->
                <script src="/assets/2878b065/yii.js"></script>
                <script src="/assets/2878b065/yii.validation.js"></script>
                <script src="/assets/2878b065/yii.activeForm.js"></script>
                <script>jQuery(function ($) {
                    jQuery('#w0').yiiActiveForm([{"id":"loginform-username","name":"username","container":".field-loginform-username","input":"#loginform-username","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Email không được để trống"});}},{"id":"loginform-password","name":"password","container":".field-loginform-password","input":"#loginform-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Mật khẩu không được để trống"});}},{"id":"loginform-rememberme","name":"rememberMe","container":".field-loginform-rememberme","input":"#loginform-rememberme","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.boolean(value, messages, {"trueValue":"1","falseValue":"0","message":"Tự động đăng nhập phải là \"1\" hoặc \"0\".","skipOnEmpty":1});}}], []);
                    });
                </script>
            </div>
            <!-- /page content -->
            <!-- Footer -->
            <div class="footer text-muted hide">
                &copy; 2020 Copyright JobsGO. All Rights Reserved.
                <span class="hide">Developed by <a style="font-weight: bold; letter-spacing: 1px; color: #777; padding: 1px 0; text-decoration: none; font-family: Arial, sans-serif;" href="http://colorgb.com" target="_blank" rel="noopener noreferrer"><strong style="color: #777; display: inline-block;">COLO</strong><strong style="color: #e74c3c; display: inline-block;">R</strong><strong style="color: #2ecc71; display: inline-block;">G</strong><strong style="color: #3498db; display: inline-block;">B</strong>™</a> </span>
            </div>
            <!-- /footer -->
        </div>
        <!-- /page container -->
        <div class="modal" id="colorgbIframeModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="model-header">
                        <button type="button" class="close" data-dismiss="modal" onclick="colorgbGridReload()">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="pace-demo colorgb-pace-demo">
                            <div class="theme_tail_circle">
                                <div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
                                <div class="pace_activity"></div>
                            </div>
                        </div>
                        <iframe class="colorgb-content-wrapper" width="100%" height="100%" frameborder="0"></iframe>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <script src="/bolt/assets/js/core/libraries/jquery.backstretch.min.js"></script>
        <script>
            $(function () {
                $.backstretch([
                    "/bolt/assets/images/backgrounds/bg-9.jpg",
                ], {
                    fade: 0,
                });
            })
        </script>
    </body>
</html>