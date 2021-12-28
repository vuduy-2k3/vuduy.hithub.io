<div class="sidebar sidebar-main sidebar-default">
                    <div class="sidebar-content">
                        <!-- Main navigation -->
                        <div class="sidebar-category sidebar-category-visible">
                            <div class="category-title h6">
                                <span>Thao tác hệ thống</span>
                                <ul class="icons-list">
                                    <li>
                                        <a class="sidebar-control sidebar-main-toggle hidden-xs" data-popup="tooltip" title="Thu gọn / Mở rộng" data-placement="bottom" data-container="body">
                                        <i class="icon-grid"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">
                                    <li><a href="{{route('indexUV')}}"><i class="fa fa-home"></i> <span>Trang chủ <span class="small text-muted hide count-job-1"></span></span></a></li>
                                    <li class="navigation-header">
                                        <span>Quản lý việc làm</span> <i class="icon-menu"></i>
                                    </li>

                                        <li>
                                            <a href="{{route('vieclamdaluu')}}"><i class="icon-file-check2 position-left"></i> <span>Việc làm đã lưu <span class="small text-muted hide count-job-1"></span></span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('vieclamdaungtuyen')}}"><i class="icon-file-check2 position-left"></i> <span>Việc làm đã ứng tuyển <span class="small text-muted hide count-job-1"></span></span></a>
                                        </li>                                    
                                    <li class="navigation-header">
                                        <span>Thiết lập cá nhân</span> <i class="icon-menu"></i>
                                    </li>
                                        <li><a href="" onclick="document.getElementById('id01').style.display='block'"><i class="icon-profile"></i> <span>Thông tin cá nhân</span></a></li>
                                        <li class="dangxuat"><a href="{{route('dangxuatUV')}}" class="btn-colorgb-jgd" data-reload="true" data-pjax="false" title="Bạn có chắc muốn đăng xuất khỏi hệ thống?"><i class="icon-switch2"></i> <span>Đăng xuất</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /main navigation -->
                    </div>
                </div>

                <!-- Cập nhập hồ sơ ứng viên -->
                <div id="id01" class="modall">
                    <form method="POST" id="formJoin" class="modall-contentt animatee" action="{{route('capnhaphosoungvien')}}">
                        @csrf
                        <div class="containerr">
                            <h1 style="text-align: center;">THÔNG TIN CÁ NHÂN</h1><br>
                            <div class="col-md-6">
                                
                                    
                                
                                <h3>Thông tin cá nhân </h3>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Họ tên *</label>
                                    @foreach($ungvien as $uv)
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$uv->user->name}}" name="name">
                                    @endforeach
                                    @error('name')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Giới tính *</label>
                                    <select value="{{$uv->gioitinh}}" name="gioitinh">
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
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1">Email (Email là tên đăng nhập không thể thay đổi)</label>
                                    @foreach($ungvien as $uv)
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$uv->user->email}}" readonly="readonly">
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Ngày sinh *</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" value="{{$uv->ngaysinh}}" name="ngaysinh"> @error('ngaysinh')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror                                 
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Số điện thoại *</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" value="0{{$uv->sdt}}" name="sdt"> 
                                    @error('sdt')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror                                 
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">Địa chỉ *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$uv->diachi}}" name="diachi">  @error('diachi')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror                                
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h3>Thông tin thêm</h3>
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">Kinh nghiệm (Năm) </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="kinhnghiem" value="{{$uv->kinhnghiem}}">
                                    @error('kinhnghiem')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Mức lương hiện tại (USD) </label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="luonghientai" value="{{$uv->luonghientai}}">
                                    @error('luonghientai')
                                                    <div class="alert alert-danger">
                                                        {{$message}}
                                                    </div>                                                    
                                                @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Mức lương mong muốn (USD) </label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="luongmongmuon" value="{{$uv->luongmongmuon}}">
                                </div>
                                <div class="col-md-6">
                                        <label for="exampleInputEmail1">Vị trí mong muốn </label>
                                        <select name="vitri">
                                            <option>{{$uv->vitri}}</option>
                                            <option>Thực tập sinh</option>
                                            <option>Nhân viên/Chuyên viên</option>
                                            <option>Trưởng nhóm/Trưởng phòng</option>
                                            <option>Giám đốc/Cấp cao hơn</option>
                                        </select>
                                    
                                </div>
                                    
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Loại hình công việc mong muốn </label>
                                        <select name="loaihinh" value="">
                                            <option>{{$uv->loaihinh}}</option>
                                            <option>Toàn thời gian</option>
                                            <option>Bán thời gian</option>
                                            <option>Làm theo giờ</option>
                                            <option>Sinh viên/Thực tập</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Bằng cấp </label>
                                        <select name="bangcap" value="">
                                            <option>{{$uv->bangcap}}</option>
                                            <option>Trung cấp - Nghề</option>
                                            <option>Cao đẳng</option>
                                            <option>Đại học</option>
                                            <option>Thạc sỹ</option>
                                            <option>Tiến sỹ</option>
                                            <option>Chứng chỉ chuyên ngành</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Địa điểm làm việc mong muốn </label>
                                        <select name="khuvuc" value="">
                                            <option>{{$uv->khuvuc}}</option>
                                            @foreach($khuvuc as $kv)
                                                <option>{{$kv->ten_kv}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Giới thiệu bản thân</label>
                                        <textarea class="form-control" name="ghichu">{{$uv->ghichu}}</textarea>
                                    </div>
                            </div>


                            
                                
                            
                            
                        </div>
                        <div style="clear: none;">
                            <br>
                        </div>

                        <div class="containerr" style="background-color:#fff">
                            <p>&nbsp;</p>
                            <hr>
                            <button type="submit" class="btn btn-success">Lưu</button>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>
                        </div>
                    </form>
                </div>