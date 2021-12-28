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
  <div class="col-md-12" style="background-color: #fff">
    <div id="colorgb-pjax-pjax" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
      <div class="kv-loader-overlay">
        <div class="kv-loader"></div>
      </div>
      <div id="colorgb-pjax" class="grid-view hide-resize" data-krajee-grid="kvGridInit_4851d525">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="pull-left">
                <style type="text/css">
                    .glyphicon-share-alt{
                        -webkit-transform: rotateY(180deg);
                        -moz-transform: rotateY(180deg);
                        -o-transform: rotateY(180deg);
                        -ms-transform: rotateY(180deg);
                        transform: rotateY(180deg);
                    }
                </style>
            </div>
            <a href="{{route('hosoungvien')}}"><i class="glyphicon glyphicon-share-alt" ></i></a>
            <h3 class="panel-title">
              <b>HỒ SƠ ỨNG VIÊN
              </b>
            </h3>
            <div class="clearfix"></div>
          </div>
          <style type="text/css">
            th{
            text-align: center;
            }
            td{
            text-align: center;
            }
          </style>
          <div class="container">
            <div class="tab-content">
              <p></p>
              <div class="clearfix">
                <h6 class="modal-title text-uppercase pull-left text-orange-700 mb-20">
                  <i class="icon-user"></i> Thông tin cá nhân &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="/static/assets/images/avt/{{$chitiet->hinhanh}}" width="100px" height="100px" style="border: 1px solid orange">
                </h6>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="form-group field-updateprofileform-name required">
                    <label class="control-label" for="updateprofileform-name">Họ tên</label>
                    <input type="text" id="updateprofileform-name" class="form-control"  value="{{$chitiet->user->name}}" readonly="readonly">
                    <p class="help-block help-block-error"></p>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group field-updateprofileform-email required">
                    <label class="control-label" for="updateprofileform-email">Email</label>
                    <input type="text" id="updateprofileform-email" class="form-control" value="{{$chitiet->user->email}}" readonly="readonly">
                    <p class="help-block help-block-error"></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group field-updateprofileform-gender required">
                        <label class="control-label" for="updateprofileform-gender">Giới tính</label>
                        <input type="text" id="updateprofileform-date_of_birth" class="form-control" value="{{$chitiet->gioitinh}}" readonly="readonly">
                        <p class="help-block help-block-error"></p>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="form-group field-updateprofileform-date_of_birth required">
                        <label class="control-label" for="updateprofileform-date_of_birth">Ngày sinh</label>
                        <input type="text" id="updateprofileform-date_of_birth" class="form-control" value="{{$chitiet->ngaysinh}}" readonly="readonly">
                        <p class="help-block help-block-error"></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group field-updateprofileform-tel required">
                    <label class="control-label" for="updateprofileform-tel">Số điện thoại</label>
                    <input type="tel" id="updateprofileform-tel" class="form-control" value="{{$chitiet->sdt}}" readonly="readonly">
                    <p class="help-block help-block-error"></p>
                  </div>
                </div>
                <div class="col-sm-10">
                  <div class="form-group field-updateprofileform-current_city">
                    <label class="control-label" for="updateprofileform-current_city">Địa chỉ đang sinh sống</label>
                    <input type="text" id="updateprofileform-current_city" class="form-control" value="{{$chitiet->diachi}}" readonly="readonly">
                    <p class="help-block help-block-error"></p>
                  </div>
                  <div class="hide">
                    <input type="hidden" name="UpdateProfileForm[jid]" value="">
                  </div>
                </div>
              </div>
              <div class="clearfix">
                <h6 class="modal-title text-uppercase pull-left text-orange-700 mb-20">
                  <i class="icon-info22"></i> Thông tin thêm
                </h6>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label class="control-label">
                  Mức lương hiện tại <b>(USD)</b>
                  </label>
                  <div class="form-group">
                      <input type="text" value="{{$chitiet->luonghientai}}" readonly="readonly" class="form-control"  >
                  </div>
                </div>
                <div class="col-md-5">
                  <label class="control-label clearfix">
                  Mức lương mong muốn <b>(USD)</b>
                  </label>
                  <div class="form-group">
                      <input type="text" value="{{$chitiet->luongmongmuon}}" readonly="readonly" class="touchspin-postfix form-control" style="display: block;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group field-updateprofileform-job_type_id">
                        <label class="control-label" for="updateprofileform-job_type_id">Kinh nghiệm</label>
                        <input type="text" value="{{$chitiet->kinhnghiem}}" readonly="readonly" class="touchspin-postfix form-control" style="display: block;">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group field-updateprofileform-job_type_id">
                        <label class="control-label" for="updateprofileform-job_type_id">Loại hình công việc mong muốn</label>
                        <input type="text" value="{{$chitiet->loaihinh}}" readonly="readonly" class="touchspin-postfix form-control" style="display: block;">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group field-updateprofileform-job_place">
                        <label class="control-label" for="updateprofileform-job_place">Địa điểm làm việc mong muốn</label>
                        <input type="text" value="{{$chitiet->khuvuc}}" readonly="readonly" class="touchspin-postfix form-control" style="display: block;">   
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group field-updateprofileform-degree_id">
                        <label class="control-label" for="updateprofileform-degree_id">Bằng cấp cao nhất</label>
                        <input type="text" value="{{$chitiet->bangcap}}" readonly="readonly" class="touchspin-postfix form-control" style="display: block;">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group field-updateprofileform-job_position_id">
                        <label class="control-label" for="updateprofileform-job_position_id">Vị trí mong muốn</label>
                        <input type="text" value="{{$chitiet->vitri}}" readonly="readonly" class="touchspin-postfix form-control" style="display: block;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group field-updateprofileform-short_bio">
                    <label class="control-label" for="updateprofileform-short_bio">Giới thiệu về bản thân</label>
                    <textarea id="updateprofileform-short_bio" class="form-control" readonly="readonly">{{$chitiet->ghichu}}</textarea>
                    <p class="help-block help-block-error"></p>
                  </div>
                </div>
              </div>
              <div class="kv-panel-after"></div>
              <div class="panel-footer">
                <div class="kv-panel-pager">
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->
</div>
<!-- /page container -->
</div>
</div>
@endsection