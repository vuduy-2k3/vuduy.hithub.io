<div class="search-box padd-top-30 padd-bot-20 clearfix">
                <div class="container">
                    <form role="search" method="get" id="searchform" action="{{route('loc')}}">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-md-5 col-xs-10 no-padd">
                                        <div class="input-group">
                                            <select class="form-control br-1" name="id_kv">
                                                <option value="">Chọn địa điểm</option>
                                                @foreach($khuvuc as $kv)
                                                <option  value="{{$kv->id_kv}}">{{$kv->ten_kv}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-xs-10 no-padd">
                                        <div class="input-group">
                                            <select class="form-control br-1" name="id_nn">
                                                <option value="">Chọn ngành nghề</option>
                                                @foreach($nganhnghe as $nn)
                                                <option  value="{{$nn->id_nn}}">{{$nn->ten_nn}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-3 col-md-2 no-padd"> <button id="searchsubmit"s type="submit" class="btn btn-primary full-width"><i class="fa fa-search"></i> <span class="hidden-xs"></span></button> </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            