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
                                    <li><a href="{{route('indexNTD')}}"><i class="fa fa-home"></i> <span>Trang chủ <span class="small text-muted hide count-job-1"></span></span></a></li>
                                    <li class="navigation-header">
                                        <span>Quản lý việc làm</span> <i class="icon-menu"></i>
                                    </li>
                                        <li><a href="{{route('vieclamdadang')}}"><i class="icon-file-check2 position-left"></i> <span>Việc làm đã đăng <span class="small text-muted hide count-job-1"></span></span></a></li>
                                    
                                    <li class="navigation-header">
                                        <span>Quản lý ứng viên</span> <i class="icon-menu"></i>
                                    </li>
                                        <li><a href="{{route('hosoungvien')}}"><i class="icon-user-plus position-left"></i> <span>Hồ sơ ứng viên <span class="small text-muted hide count-candidate-1"></span></span></a></li>

                                    
                                    <li class="navigation-header">
                                        <span>Thiết lập cá nhân</span> <i class="icon-menu"></i>
                                    </li>
                                        <li><a href="" onclick="document.getElementById('id02').style.display='block'"><i class="icon-profile"></i> <span>Thông tin cá nhân</span></a></li>
                                        <li>
                                            <a href="{{route('themhinh',Auth::user()->id)}}"><i class="fa fa-plus"></i> <span>Cập nhập hình</span></a> 
                                        </li>
                                        <li class="dangxuat"><a href="{{route('dangxuatNTD')}}" class="btn-colorgb-jgd" data-reload="true" data-pjax="false" title="Bạn có chắc muốn đăng xuất khỏi hệ thống?"><i class="icon-switch2"></i> <span>Đăng xuất</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /main navigation -->
                    </div>
                </div>
                <!-- Đăng bài mới-->
                <div id="id01" class="modall">
                    <form method="POST" id="formJoin" class="modall-contentt animatee" action="{{route('dangbaimoiNTD')}}">
                        @csrf
                        <div class="containerr">
                            <h1 style="text-align: center;">THÔNG TIN ĐĂNG TUYỂN</h1><br>
                            <div class="col-md-6">
                                <h3>Thông tin cơ bản</h3>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề công việc *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="ten_vl">
                                    @error('ten_vl')
                                                    <b style="color:red">{{$message}}</b>                                    
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả công việc *</label>
                                     <textarea class="form-control" id="editor1"  name="mota"></textarea>
                                     @error('mota')
                                                    <b style="color:red">{{$message}}</b>                                 
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Yêu cầu công việc *</label>
                                     <textarea class="form-control" id="editor2" name="yeucau"></textarea>
                                     @error('yeucau')
                                                    <b style="color:red">{{$message}}</b>                                         
                                            @enderror
                                </div>
                                <script>    CKEDITOR.replace( 'editor1' );</script>
                                <script>    CKEDITOR.replace( 'editor2' );</script>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Khu vực *</label>
                                        <select name="id_kv">
                                            <option></option>
                                            @foreach($khuvuc as $kv)
                                                <option value="{{$kv->id_kv}}">{{$kv->ten_kv}}</option>
                                            @endforeach
                                        </select>
                                        @error('id_kv')
                                                    <b style="color:red">{{$message}}</b>                                  
                                            @enderror
                                    </div>
                                    
                                        
                            
                            </div>

                            <div class="col-md-6">
                                <h3>Thông tin chi tiết</h3>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa điểm làm việc *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="diachi">
                                        @error('diachi')
                                                    <b style="color:red">{{$message}}</b>                                       
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng *</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="soluong">
                                    @error('soluong')
                                                    <b style="color:red">{{$message}}</b>                                        
                                            @enderror
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số năm kinh nghiệm *</label>
                                        <select name="kinhnghiem">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>Trên 10</option>
                                            <option>Không yêu cầu</option>
                                        </select>  
                                        @error('kinhnghiem')
                                                    <b style="color:red">{{$message}}</b>                                 
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mức lương(USD) *</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" name="mucluong">
                                        @error('mucluong')
                                                    <b style="color:red">{{$message}}</b>                                     
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày hết hạn *</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" name="ngayhethang">
                                        @error('ngayhethang')
                                                    <b style="color:red">{{$message}}</b>                                     
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí *</label>
                                        <select name="vitri">
                                            <option></option>
                                            <option>Thực tập sinh</option>
                                            <option>Nhân viên/Chuyên viên</option>
                                            <option>Trưởng nhóm/Trưởng phòng</option>
                                            <option>Giám đốc/Cấp cao hơn</option>
                                        </select>
                                        @error('vitri')
                                                    <b style="color:red">{{$message}}</b>                                    
                                            @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngành nghề chuyên môn *</label>
                                        <select name="id_nn">
                                            <option></option>
                                            @foreach($chuyenmon as $cm)
                                                <option value="{{$cm->id_nn}}">{{$cm->ten_nn}}</option>
                                            @endforeach
                                        </select>
                                        @error('id_nn')
                                                    <b style="color:red">{{$message}}</b>                                      
                                            @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tính chất công việc *</label>
                                        <select name="tinhchat">
                                            <option></option>
                                            <option>Toàn thời gian</option>
                                            <option>Bán thời gian</option>
                                            <option>Làm theo giờ</option>
                                            <option>Sinh viên/Thực tập</option>
                                        </select>
                                        @error('tinhchat')
                                                    <b style="color:red">{{$message}}</b>                                  
                                            @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bằng cấp *</label>
                                        <select name="bangcap">
                                            <option></option>
                                            <option>Trung cấp - Nghề</option>
                                            <option>Cao đẳng</option>
                                            <option>Đại học</option>
                                            <option>Thạc sỹ</option>
                                            <option>Tiến sỹ</option>
                                            <option>Chứng chỉ chuyên ngành</option>
                                        </select>
                                        @error('bangcap')
                                                    <b style="color:red">{{$message}}</b>                                        
                                            @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chức vụ *</label>
                                        <select name="chucvu">
                                            <option></option>
                                            <option>Thực tập sinh đào tạo</option>
                                            <option>Nhân viên đào tạo</option>
                                            <option>Chuyên viên đào tạo</option>
                                            <option>Giám đốc đào tạo</option>
                                            <option>Trưởng phòng đào tạo</option>
                                            <option>Chuyên viên huấn luận viên</option>
                                        </select>
                                        @error('chucvu')
                                                    <b style="color:red">{{$message}}</b>                            
                                            @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yêu cầu đồ tuổi *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tuoi" placeholder="18-30" pattern="[0-9]{2}-[0-9]{2}">
                                        @error('tuoi')
                                                    <b style="color:red">{{$message}}</b>                                  
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yêu cầu giới tính *</label>
                                        <select name="gioitinh">
                                            <option></option>
                                            <option>Nam</option>
                                            <option>Nữ</option>
                                            <option>Không yêu cầu</option>
                                        </select>  
                                        @error('gioitinh')
                                                    <b style="color:red">{{$message}}</b>                                                 
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <hr>
                        </div>

                        <div style="clear: none;"></div>

                        <div class="containerr" style="background-color:">
                            <button type="submit" class="btnthem">Đăng bài</button>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>
                        </div>
                    </form>
                </div>

                <!-- Hồ sơ cá nhân-->
                <div id="id02" class="modall">
                    <form method="POST" id="formJoin" class="modall-contentt animatee" action="{{route('capnhaphosoNTD')}}">
                        @csrf
                        <div class="containerr">
                            <h1 style="text-align: center;">CẬP NHẬP HỒ SƠ</h1><br>                                
                                <h3>Thông tin công ty </h3>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group field-registerform-employer_id required">
                                            <label class="control-label" for="registerform-employer_id">Tên công ty</label>
                                            @foreach($nhatuyendung as $ntd)
                                            <input type="text" id="registerform-employer_id" class="form-control" name="ten_cty" placeholder="Nhập tên công ty..." aria-required="true" value="{{$ntd->cti->ten_cty}}">
                                            @endforeach
                                            @error('ten_cty')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-email required">
                                            <label class="control-label" for="registerform-email">Email công ty</label>
                                            @foreach($nhatuyendung as $ntd)
                                            <input type="text" id="registerform-email" class="form-control" name="email_cty" placeholder="Nhập email công ty..." aria-required="true" value="{{$ntd->cti->email}}">
                                            @endforeach
                                            @error('email_cty')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Khu vực</label>
                                            <select class="form-control" name="id_kv">
                                                @foreach($khuvuc as $kv)
                                                <option value="{{$kv->id_kv}}" <?php echo $congty['id_kv'] == $kv['id_kv'] ? "selected = 'selected'" : '' ?>>{{$kv->ten_kv}}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        @error('id_kv')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Lĩnh vực</label>
                                            <select class="form-control" name="id_nn">
                                                @foreach($chuyenmon as $cm)
                                                <option value="{{$cm->id_nn}}" <?php echo $congty['id_nn'] == $cm['id_nn'] ? "selected = 'selected'" : '' ?>>{{$cm->ten_nn}}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        @error('id_nn')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-tel required">
                                            <label class="control-label" for="registerform-tel">Số điện thoại công ty</label>
                                            @foreach($nhatuyendung as $ntd)
                                            <input type="number" id="registerform-tel" class="form-control" name="sdt_cty" placeholder="Nhập số điện thoại công ty..." aria-required="true" value="0{{$ntd->cti->sdt}}">
                                            @endforeach
                                            @error('sdt_cty')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Mô tả công ty</label>
                                            <textarea class="form-control" name="mota_cty">{{$congty->mota_cty}}</textarea>
                                            
                                        </div>
                                        @error('mota_cty')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group field-registerform-employer_address required">
                                            <label class="control-label" for="registerform-employer_address">Địa chỉ công ty</label>
                                            @foreach($nhatuyendung as $ntd)
                                            <input type="text" id="registerform-employer_address" class="form-control" name="diachi_cty" placeholder="Nhập địa chỉ công ty..." aria-required="true" value="{{$ntd->cti->diachi}}">
                                            @endforeach
                                            @error('diachi_cty')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    

                            <h3>Thông tin người đăng ký </h3>
                            <fieldset class="well the-fieldset">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-hr_name required">
                                            <label class="control-label" for="registerform-hr_name">Người đăng ký</label>
                                            @foreach($nhatuyendung as $ntd)
                                            <input type="text" id="registerform-hr_name" class="form-control" name="ten_ndk" placeholder="Nhập họ tên..." aria-required="true" value="{{$ntd->ten_ndk}}">
                                            @endforeach
                                            @error('ten_ndk')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-role required">
                                            <label class="control-label" for="registerform-role">Chức vụ</label>
                                            @foreach($nhatuyendung as $ntd)
                                            <input type="text" id="registerform-role" class="form-control" name="chucvu_ndk" placeholder="Nhập chức vụ..." aria-required="true" value="{{$ntd->chucvu_ndk}}">
                                            @endforeach
                                            @error('chucvu_ndk')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-stel">
                                            <label class="control-label" for="registerform-stel">Số điện thoại cá nhân</label>
                                            @foreach($nhatuyendung as $ntd)
                                            <input type="number" id="registerform-stel" class="form-control" name="sdt_ndk" placeholder="Nhập số điện thoại cá nhân..." value="0{{$ntd->sdt_ndk}}">
                                            @endforeach
                                            @error('sdt_ndk')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group field-registerform-place_id">
                                            <label class="control-label" for="registerform-place_id">Địa chỉ</label>
                                            @foreach($nhatuyendung as $ntd)
                                            <input type="text" id="registerform-stel" class="form-control" name="diachi_ndk" placeholder="Nhập số điện thoại cá nhân..." value="{{$ntd->diachi_ndk}}">
                                            @endforeach
                                            @error('diachi_ndk')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            
                            
                        </div>
                        <div style="clear: none;"></div>
                        <button type="submit" class="btnthem">Lưu</button>
                        <div class="containerr" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Thoát</button>
                        </div>
                    </form>
                </div>

                <!-- Đăng bài mới-->
                <div id="id03" class="modall">
                    <form method="POST" id="formJoin" class="modall-contentt animatee">
                        <div class="containerr">
                            <h1 style="text-align: center;">BÀI ĐĂNG TUYỂN</h1><br>
                            <div class="col-md-6">
                                <h3>Thông tin cơ bản</h3>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề công việc *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="ten_vl">
                                    @error('ten_vl')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả công việc *</label>
                                     <textarea class="form-control" id="exampleInputEmail1" name="mota"></textarea>
                                     @error('mota')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Yêu cầu công việc *</label>
                                     <textarea class="form-control" id="exampleInputEmail1" name="yeucau"></textarea>
                                     @error('yeucau')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                </div>
                                        
                            
                            </div>

                            <div class="col-md-6">
                                <h3>Thông tin chi tiết</h3>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa điểm làm việc *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="diachi">
                                        @error('diachi')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng *</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="soluong">
                                    @error('soluong')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số năm kinh nghiệm *</label>
                                        <select name="kinhnghiem">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>Không yêu cầu</option>
                                        </select>  
                                        @error('kinhnghiem')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mức lương(USD) *</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" name="mucluong">
                                        @error('mucluong')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày hết hạn *</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" name="ngayhethang">
                                        @error('ngayhethang')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí *</label>
                                        <select name="vitri">
                                            <option></option>
                                            <option>Thực tập sinh</option>
                                            <option>Nhân viên/Chuyên viên</option>
                                            <option>Trưởng nhóm/Trưởng phòng</option>
                                            <option>Giám đốc/Cấp cao hơn</option>
                                        </select>
                                        
                                    </div>
                                    @error('vitri')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngành nghề chuyên môn *</label>
                                        <select name="id_nn">
                                            <option></option>
                                            @foreach($chuyenmon as $cm)
                                                <option value="{{$cm->id_nn}}">{{$cm->ten_nn}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                    @error('id_nn')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tính chất công việc *</label>
                                        <select name="tinhchat">
                                            <option></option>
                                            <option>Toàn thời gian</option>
                                            <option>Bán thời gian</option>
                                            <option>Làm theo giờ</option>
                                            <option>Sinh viên/Thực tập</option>
                                        </select>
                                        
                                    </div>
                                    @error('tinhchat')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bằng cấp *</label>
                                        <select name="bangcap">
                                            <option></option>
                                            <option>Trung cấp - Nghề</option>
                                            <option>Cao đẳng</option>
                                            <option>Đại học</option>
                                            <option>Thạc sỹ</option>
                                            <option>Tiến sỹ</option>
                                            <option>Chứng chỉ chuyên ngành</option>
                                        </select>
                                        
                                    </div>
                                    @error('bangcap')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chức vụ *</label>
                                        <select name="chucvu">
                                            <option></option>
                                            <option>Thực tập sinh đào tạo</option>
                                            <option>Nhân viên đào tạo</option>
                                            <option>Chuyên viên đào tạo</option>
                                            <option>Giám đốc đào tạo</option>
                                            <option>Trưởng phòng đào tạo</option>
                                            <option>Chuyên viên huấn luận viên</option>
                                        </select>
                                        
                                    </div>
                                    @error('chucvu')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yêu cầu đồ tuổi *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tuoi">
                                        @error('tuoi')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yêu cầu giới tính *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="gioitinh">
                                        @error('gioitinh')
                                                <div class="alert alert-danger">
                                                    <b style="color:red">{{$message}}</b>
                                                </div>                                                    
                                            @enderror
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div style="clear: none;"></div>
                        <div class="containerr" >
                            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Thoát</button>
                        </div>
                    </form>
                </div>

            