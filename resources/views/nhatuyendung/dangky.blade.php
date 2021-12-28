<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <title>Đăng ký dành cho nhà tuyển dụng</title>
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
                        width: 70%;
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
                    <form id="w0" action="{{route('dangkyNTD')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="" value="">
                        <a title="D-S.com - Trang chủ" href="{{route('quanlytimvieclam.com')}}" class="site-logo">
                        <img src="/static/assets/images/logo/1.png" alt="D-S.com">
                        </a>
                        <div class="panel panel-body login-form">
                            <div class="text-center hide">
                                <h3 class="content-group text-uppercase">Dành cho nhà tuyển dụng
                                </h3>
                            </div>
                            <div class="content-divider text-uppercase form-group"><b><span>Đăng ký thông tin nhà tuyển dụng</span></b></div>
                            <div class="content-divider text-muted form-group"><span>Dành cho nhà tuyển dụng</span></div>
                            <fieldset class="well the-fieldset">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_id required">
                                            <label class="control-label" for="registerform-employer_id">Tên công ty</label>
                                            <input type="text" id="registerform-employer_id" class="form-control" name="ten_cty" placeholder="Nhập tên công ty..." aria-required="true">
                                            @error('ten_cty')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-email required">
                                            <label class="control-label" for="registerform-email">Email công ty</label>
                                            <input type="text" id="registerform-email" class="form-control" name="email_cty" placeholder="Nhập email công ty..." aria-required="true">
                                            @error('email_cty')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-tel required">
                                            <label class="control-label" for="registerform-tel">Số điện thoại công ty</label>
                                            <input type="text" id="registerform-tel" class="form-control" name="sdt_cty" placeholder="Nhập số điện thoại công ty..." aria-required="true">
                                            @error('sdt_cty')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Địa chỉ công ty</label>
                                            <input type="text" id="registerform-employer_address" class="form-control" name="diachi_cty" placeholder="Nhập địa chỉ công ty..." aria-required="true">
                                            @error('diachi_cty')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Khu vực</label>
                                            <select class="form-control" name="id_kv">
                                                <option>Chọn khu vực...</option>
                                                @foreach($khuvuc as $kv)
                                                <option value="{{$kv->id_kv}}">{{$kv->ten_kv}}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        @error('id_kv')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Lĩnh vực</label>
                                            <select class="form-control" name="id_nn">
                                                <option>Chọn lĩnh vực...</option>
                                                @foreach($nganhnghe as $nn)
                                                <option value="{{$nn->id_nn}}">{{$nn->ten_nn}}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        @error('id_nn')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Logo công ty</label>
                                            <input type="file" id="registerform-employer_address" class="form-control" name="logo_cty" placeholder="Nhập địa chỉ công ty..." aria-required="true">
                                            @error('logo_cty')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Mô tả công ty</label>
                                            <textarea class="form-control" name="mota_cty"></textarea>
                                            @error('mota_cty')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="well the-fieldset">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-user_name required">
                                            <label class="control-label" for="registerform-user_name">Tài khoản đăng nhập (Email)</label>
                                            <input type="text" id="registerform-user_name" class="form-control" name="username" placeholder="Nhập email" aria-required="true">
                                            @error('username')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-password required">
                                            <label class="control-label" for="registerform-password">Mật khẩu</label>
                                            <input type="password" id="registerform-password" class="form-control" name="password" autocomplete="new-password" placeholder="Nhập mật khẩu đăng nhập..." aria-required="true">
                                            @error('password')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="well the-fieldset">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-hr_name required">
                                            <label class="control-label" for="registerform-hr_name">Người đăng ký</label>
                                            <input type="text" id="registerform-hr_name" class="form-control" name="ten_ndk" placeholder="Nhập họ tên..." aria-required="true">
                                            @error('ten_ndk')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-role required">
                                            <label class="control-label" for="registerform-role">Chức vụ</label>
                                            <input type="text" id="registerform-role" class="form-control" name="chucvu_ndk" placeholder="Nhập chức vụ..." aria-required="true">
                                            @error('chucvu_ndk')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-stel">
                                            <label class="control-label" for="registerform-stel">Số điện thoại cá nhân</label>
                                            <input type="text" id="registerform-stel" class="form-control" name="sdt_ndk" placeholder="Nhập số điện thoại cá nhân...">
                                            @error('sdt_ndk')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-place_id">
                                            <label class="control-label" for="registerform-place_id">Tỉnh thành</label>
                                            <input type="text" id="registerform-stel" class="form-control" name="diachi_ndk" placeholder="Nhập địa chỉ cá nhân...">
                                            @error('diachi_ndk')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="text-center">
                                <button type="submit" class="btn bg-green btn-lg btn-ladda btn-ladda-spinner btn-ladda-progress" data-style="zoom-out"><span class="ladda-label"><b></b> Đăng ký tài khoản</span><span class="ladda-spinner"></span><span class="ladda-spinner"></span></button>
                                <a href="{{route('dangnhapNTD')}}" class="display-block mt-15"> Đăng nhập hệ thống</a>
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