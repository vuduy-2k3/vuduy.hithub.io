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
                    <form method="POST" id="formJoin" class="modall-contentt animatee" action="{{route('suaVL',$vieclam->id)}}">
                        @csrf
                        <div class="containerr">
                            <h1 style="text-align: center;">CẬP NHẬP VIỆC LÀM</h1><br>
                            <div class="col-md-6">
                                <h3>Thông tin cơ bản</h3>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề công việc *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$vieclam->ten_vl}}" name="ten_vl">
                                    @error('ten_vl')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả công việc *</label>
                                     <textarea class="form-control" id="editor3"  name="mota">{{$vieclam->mota}}</textarea>
                                     @error('mota')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Yêu cầu công việc *</label>
                                     <textarea class="form-control" id="editor4" name="yeucau">{{$vieclam->yeucau}}</textarea>
                                     @error('yeucau')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                </div>
                                <script>    CKEDITOR.replace( 'editor3' );</script>
                                <script>    CKEDITOR.replace( 'editor4' );</script>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Khu vực *</label>
                                        <select name="id_kv">
                                            
                                            @foreach($khuvuc as $kv)
                                                <option value="{{$kv->id_kv}}" <?php echo $vieclam['id_kv'] == $kv['id_kv'] ? "selected = 'selected'" : '' ?>>{{$kv->ten_kv}}</option>
                                            @endforeach
                                        </select>
                                    @error('id_kv')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror    
                                    </div>
                                    
                                        
                              
                            
                            </div>

                            <div class="col-md-6">
                                <h3>Thông tin chi tiết</h3>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa điểm làm việc *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$vieclam->diachi}}" name="diachi">
                                        @error('diachi')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng *</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" value="{{$vieclam->soluong}}" name="soluong">
                                    @error('soluong')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số năm kinh nghiệm *</label>
                                        <select name="kinhnghiem">
                                            <option value="1" {{($vieclam->kinhnghiem === '1') ? 'Selected' : ''}}>1</option>
                                            <option value="2" {{($vieclam->kinhnghiem === '2') ? 'Selected' : ''}}>2</option>
                                            <option value="3" {{($vieclam->kinhnghiem === '3') ? 'Selected' : ''}}>3</option>
                                            <option value="4" {{($vieclam->kinhnghiem === '4') ? 'Selected' : ''}}>4</option>
                                            <option value="5" {{($vieclam->kinhnghiem === '5') ? 'Selected' : ''}}>5</option>
                                            <option value="6" {{($vieclam->kinhnghiem === '6') ? 'Selected' : ''}}>6</option>
                                            <option value="7" {{($vieclam->kinhnghiem === '7') ? 'Selected' : ''}}>7</option>
                                            <option value="8" {{($vieclam->kinhnghiem === '8') ? 'Selected' : ''}}>8</option>
                                            <option value="9" {{($vieclam->kinhnghiem === '9') ? 'Selected' : ''}}>9</option>
                                            <option value="10" {{($vieclam->kinhnghiem === '10') ? 'Selected' : ''}}>10</option>
                                            <option value="Trên 10" {{($vieclam->kinhnghiem === 'Trên 10') ? 'Selected' : ''}}>Trên 10</option>
                                            <option value="Không yêu cầu" {{($vieclam->kinhnghiem === 'Không yêu cầu') ? 'Selected' : ''}}>Không yêu cầu</option>
                                        </select>  
                                        @error('kinhnghiem')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mức lương(USD) *</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" value="{{$vieclam->mucluong}}" name="mucluong">
                                        @error('mucluong')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày hết hạn *</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" value="{{$vieclam->ngayhethang}}" name="ngayhethang">
                                        @error('ngayhethang')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí *</label>
                                        <select value="{{$vieclam->vitri}}" name="vitri">
                                            <option value="Thực tập sinh" {{($vieclam->vitri === 'Thực tập sinh') ? 'Selected' : ''}}>Thực tập sinh</option>
                                            <option value="Nhân viên/Chuyên viên" {{($vieclam->vitri === 'Nhân viên/Chuyên viên') ? 'Selected' : ''}}>Nhân viên/Chuyên viên</option>
                                            <option value="Trưởng nhóm?Trưởng phòng" {{($vieclam->vitri === 'Trưởng nhóm?Trưởng phòng') ? 'Selected' : ''}}>Trưởng nhóm/Trưởng phòng</option>
                                            <option value="Giám đốc/Cấp cao hơn" {{($vieclam->vitri === 'Giám đốc/Cấp cao hơn') ? 'Selected' : ''}}>Giám đốc/Cấp cao hơn</option>
                                        </select>
                                        
                                    </div>
                                    @error('vitri')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngành nghề chuyên môn *</label>
                                        <select value="{{$vieclam->nganhnghe->id_nn}}" name="id_nn">
                                            @foreach($chuyenmon as $cm)
                                                <option value="{{$cm->id_nn}}" <?php echo $vieclam['id_nn'] == $cm['id_nn'] ? "selected = 'selected'" : '' ?>>{{$cm->ten_nn}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                    @error('id_nn')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tính chất công việc *</label>
                                        <select value="{{$vieclam->tinhchat}}" name="tinhchat">
                                            <option value="Toàn thời gian" {{($vieclam->tinhchat === 'Toàn thời gian') ? 'Selected' : ''}}>Toàn thời gian</option>
                                            <option value="Bán thời gian" {{($vieclam->tinhchat === 'Bán thời gian') ? 'Selected' : ''}}>Bán thời gian</option>
                                            <option value="Làm theo giờ" {{($vieclam->tinhchat === 'Làm theo giờ') ? 'Selected' : ''}}>Làm theo giờ</option>
                                            <option value="Sinh viên/Thực tập" {{($vieclam->tinhchat === 'Sinh viên/Thực tập') ? 'Selected' : ''}}>Sinh viên/Thực tập</option>
                                        </select>
                                        
                                    </div>
                                    @error('tinhchat')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bằng cấp *</label>
                                        <select value="{{$vieclam->bangcap}}" name="bangcap">
                                            <option value="Trung cấp - nghề" {{($vieclam->bangcap === 'Trung cấp - nghề') ? 'Selected' : ''}}>Trung cấp - Nghề</option>
                                            <option value="Cao đẳng" {{($vieclam->bangcap === 'Cao đẳng') ? 'Selected' : 'Cao đẳng'}}>Cao đẳng</option>
                                            <option value="Đại học" {{($vieclam->bangcap === 'Đại học') ? 'Selected' : ''}}>Đại học</option>
                                            <option value="Thạc sỹ" {{($vieclam->bangcap === 'Thạc sỹ') ? 'Selected' : ''}}>Thạc sỹ</option>
                                            <option value="Tiến sỹ" {{($vieclam->bangcap === 'Tiến sỹ') ? 'Selected' : ''}}>Tiến sỹ</option>
                                            <option value="Chứng chỉ chuyên ngành" {{($vieclam->chucvu === 'Chứng chỉ chuyên ngành') ? 'Selected' : ''}}>Chứng chỉ chuyên ngành</option>
                                        </select>
                                        
                                    </div>
                                    @error('bangcap')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chức vụ *</label>
                                        <select  name="chucvu">
                                            <option value="Thực tập sinh đào tạo" {{($vieclam->chucvu === 'Thực tập sinh đào tạo') ? 'Selected' : ''}}>Thực tập sinh đào tạo</option>
                                            <option value="Nhân viên đào tạo" {{($vieclam->chucvu === 'Nhân viên đào tạo') ? 'Selected' : ''}}>Nhân viên đào tạo</option>
                                            <option value="Chuyên viên đào tạo" {{($vieclam->chucvu === 'Chuyên viên đào tạo') ? 'Selected' : ''}}>Chuyên viên đào tạo</option>
                                            <option value="Giám đốc đào tạo" {{($vieclam->chucvu === 'Giám đốc đào tạo') ? 'Selected' : ''}}>Giám đốc đào tạo</option>
                                            <option value="Trưởng phòng đào tạo" {{($vieclam->chucvu === 'Trưởng phòng đào tạo') ? 'Selected' : ''}}>Trưởng phòng đào tạo</option>
                                            <option value="Chuyên viên huấn luận viên" {{($vieclam->chucvu === 'Chuyên viên huấn luận viên') ? 'Selected' : ''}}>Chuyên viên huấn luận viên</option>
                                        </select>
                                        
                                    </div>
                                    @error('chucvu')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yêu cầu đồ tuổi *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$vieclam->tuoi}}" name="tuoi">
                                        @error('tuoi')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yêu cầu giới tính *</label>
                                        <select name="gioitinh">
                                            <option value="Nam" {{($vieclam->gioitinh === 'Nam') ? 'Selected' : ''}}>Nam</option>
                                            <option value="Nữ" {{($vieclam->gioitinh === 'Nữ') ? 'Selected' : ''}}>Nữ</option>
                                            <option value="Không yêu cầu" {{($vieclam->gioitinh === 'Không yêu cầu') ? 'Selected' : ''}}>Không yêu cầu</option>
                                        </select>
                                        @error('gioitinh')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>                                                    
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="clear: none;"></div>
                        <div class="containerr" style="background-color:#fff">
                            <button type="submit" class="btn btn-success">Cập nhập</button>
                        </div>
                    </form>
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
            
        </div>
        <!-- /page container -->
        
@endsection