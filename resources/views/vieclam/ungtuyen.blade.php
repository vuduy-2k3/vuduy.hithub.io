@extends('master') @section('content')
<style>
 .site-logo,
 #load-tawkto {
  display: none !important;
 }
 .login-container .login-form {
  width: 100%;
  margin-bottom: 0;
  padding-bottom: 0;
 }
 .login-container.page-container {
  padding: 20px !important;
 }
</style>
<style>
 .content-detached {
  margin: 0 !important;
 }
</style>
<!-- Page container -->
<div class="page-container">
 <!-- Page content -->
 <div class="page-content">
  <!-- Main content -->
  <div class="content-wrapper">
   <style>
    .sidebar-detached {
     display: none;
    }
    .wizard > .steps > ul > li {
     width: 33.33333333333333%;
    }
    .form-group > label:after {
     content: " * ";
     color: red;
    }
    .wizard > .steps > ul > li > a {
     max-width: initial !important;
    }
    .wizard > .steps > ul > li.current:after {
     background-color: #4caf50;
    }
    @media (max-width: 768px) {
     body.layout-boxed {
      background: #ccc !important;
     }
     .content-detached .panel {
      border: 1 !important;
     }
    }
   </style>
   <!-- Detached content -->
   <div class="container-detached-bk">
    <div class="content-detached-bk">
     <!-- Tab content -->
     <div class="tab-content">
      <div class="tab-pane fade in active" id="profile">
       <!-- Profile info -->
       <div class="panel panel-white">
        <div class="panel-body">
         <div class="steps-basic wizard clearfix" role="application" id="steps-uid-0">
          <div class="content clearfix">
           <div class="row">
            <div class="col-sm-6 col-sm-offset-3"  style="border: 1px solid #ccc">
            	<div class="panel-heading">
				 <h6 class="panel-title text-center" style="color: green" ><b>
				  ỨNG TUYỂN VIỆC LÀM: {{$vieclam->ten_vl}} (D-S.com) <a target="_blank" class="text-blue" title="Xem chi tiết việc làm" href="{{route('chitietvieclam',$vieclam->id)}}"><i class="fa fa-external-link" aria-hidden="true"></i></a></b>
				 </h6>
				 <div class="heading-elements">
				 <hr>
				 <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
				</div>

             <fieldset id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
              <form id="w0" action="" method="post">
               @csrf
               <div class="row">
                <div class="col-xs-4">
                 <div class="form-group">
                  <label class="control-label" >Họ tên</label>
                  <input type="text" class="form-control" name="" value="{{$ungvien->user->name}}" />
                 </div>
                </div>
                <div class="col-xs-3">
                 <div class="form-group">
                  <label class="control-label" >Số điện thoại</label>
                  <input type="text"  class="form-control" name="" value="{{$ungvien->sdt}}" />
                 </div>
                </div>
                <div class="col-xs-4">
                 <div class="form-group">
                  <label class="control-label" >Năm sinh</label>
                  <input type="date" class="form-control" name="" value="{{$ungvien->ngaysinh}}" />
                 </div>
                </div>
               </div>
               <div class="form-group">
                <label class="control-label" >Chỗ ở hiện tại</label>
                <input type="text"  class="form-control" name="" value="{{$ungvien->diachi}}" />
               </div>
               <div class="form-group">
                <div class="text-center mt-20">
                 <button type="submit" class="btn btn-primary  btn-ladda btn-ladda-spinner btn-ladda-progress" data-style="zoom-out"><span class="ladda-label text-uppercase">Lưu</span><span class="ladda-spinner"></span><span class="ladda-spinner"></span></button>
                </div>
               </div>
              </form>
             </fieldset>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <!-- /profile info -->
      </div>
     </div>
     <!-- /tab content -->
    </div>
   </div>
   <!-- /detached content -->
  </div>
  <!-- /main content -->
 </div>
 <!-- /page content -->
</div>
@endsection
