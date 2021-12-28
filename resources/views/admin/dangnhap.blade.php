<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <title>Đăng nhập hệ thống - Dành cho nhà tuyển dụng</title>
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
         @if(Session::has('success'))
                    <script type="text/javascript">
                       alert('{{ Session::get('success')}}');
                    </script>
                    @endif
    </head>
    <body class=" access ">
        
        <!-- Page container -->
        <div class="page-container login-container">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main content -->
                <div class="content-wrapper">
                    <form id="w0" action="{{route('dangnhapadmin')}}" method="post">
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
                            <div class="content-divider text-uppercase form-group"><b><span>Hệ thống đăng Nhập</span></b></div>
                            <div class="content-divider text-muted form-group"><span>Dành cho nhà quản trị</span></div>
                            <div class="form-group field-loginform-username required">
                                <label class="control-label" for="loginform-username">Email</label>
                                <input type="text" id="loginform-username" class="form-control" name="email" aria-required="true">
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>                                                    
                                @enderror
                            </div>
                            <div class="form-group field-loginform-password required">
                                <label class="control-label" for="loginform-password">Mật khẩu</label>
                                <input type="password" id="loginform-password" class="form-control" name="password" aria-required="true">
                                @error('password')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>                                                    
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="ref" value="/candidate/update-cv">
                                <button type="submit" class="display-block btn btn-primary btn-ladda btn-ladda-spinner btn-ladda-progress" data-style="zoom-out">
                                <span class="ladda-label text-uppercase">Đăng nhập</span>
                                </button>
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
                &copy; 2020 Copyright D-S.com. All Rights Reserved.
                <span class="hide">Developed by <a style="font-weight: bold; letter-spacing: 1px; color: #777; padding: 1px 0; text-decoration: none; font-family: Arial, sans-serif;" href="http://colorgb.com" target="_blank" rel="noopener noreferrer"><strong style="color: #777; display: inline-block;">COLO</strong><strong style="color: #e74c3c; display: inline-block;">R</strong><strong style="color: #2ecc71; display: inline-block;">G</strong><strong style="color: #3498db; display: inline-block;">B</strong>™</a> </span>
            </div>
            <!-- /footer -->
        </div>
        <!-- /page container -->
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