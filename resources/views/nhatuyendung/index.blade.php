@extends('dashboard.master')
@section('content') 
<!-- Page header -->
 

        <div class="page-header">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-anchor position-left"></i>
                        D-S.com dành cho Nhà tuyển dụng
                    </h4>
                </div>
                <div class="heading-elements">
                    <div class="heading-btn-group">
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="icon-file-plus text-primary"></i> Đăng bài tuyển dụng mới</button>
                        
                    </div>
                </div>
                

            </div>

        </div>

        <!-- /page header -->
        <!-- Page container -->
        <div class="page-container ">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main sidebar -->
                @include('nhatuyendung.thaotac')
                <!-- /main sidebar -->
                <!-- Main content -->
                <div class="content-wrapper">
                    <style>
                        .checkbox-switchery.checkbox-right .switchery{
                        border-color: rgb(47, 140, 186) !important;
                        }
                    </style>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="">
                            <img src="/static/assets/images/banner/1.gif" class="img-responsive mb-20" alt="banner-1200x100">
                            </a>
                        </div>
                    </div>
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Bảng thông tin</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- small box -->
                                    <div class="small-box bg-pink-400 clearfix">
                                        <div class="inner">
                                            <h3 class="count count-job-0">{{count($vieclam)}}</h3>
                                            <p>Việc làm đã đăng</p>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-clipboard3"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-sm-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green-400 clearfix">
                                        <div class="inner">
                                            <h3 class="count count-candidate-0">{{count($ungtuyen)}}</h3>
                                            <p>Ứng viên ứng tuyển</p>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-users"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
            
        </div>
        <!-- /page container -->
        
@endsection