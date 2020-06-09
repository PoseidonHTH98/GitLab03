@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">TRUYỆN 
                            <small>{{$truyen->TieuDe}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->


                    <div class="col-lg-7" style="padding-bottom:120px">

                         @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                @endforeach
                                    </div>
                            @endif   


                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                        
                        <form action="admin/truyen/sua/{{$truyen->id}}" method="POST" enctype="multipart/form-data" >
                          <input type="hidden" name="_token" value="{{csrf_token()}}">                  
                            <div class="form-group">
                                <label>THỂ LOẠI</label>
                                <select class="form-control" name="theloai" id="theloai">
                                    @foreach($theloai as $tl)
                                     <option
                                     @if($truyen->loaitin->theloai->id == $tl->id)
                                     {{"selected"}}
                                     @endif

                                      value="{{$tl -> id}}">{{$tl -> Ten}}</option>
                                     @endforeach
                                </select>
                             </div>  
                             

                              <div class="form-group">
                                <label>LOẠI TRUYỆN</label>
                                <select class="form-control" name="loaitin" id="loaitin" >
                                    @foreach($loaitin as $lt)
                                     <option
                                     @if($truyen->loaitin->id == $lt->id)
                                     {{"selected"}}
                                     @endif
                                      value="{{$lt -> id}}">{{$lt -> Ten}}</option>
                                     @endforeach
                                </select>
                             </div>   


                           

                            <div class="form-group">
                                <label>Tiêu Đề</label>
                                <input class="form-control" name="TieuDe" value="{{$truyen->TieuDe}}" />
                            </div>

                            <div class="form-group">
                                <label>Tiêu Đề Không Dấu</label>
                                <input class="form-control" name="TieuDeKhongDau" />
                            </div>


                            <div class="form-group">
                                <label>Tóm Tắt</label>
                                <textarea id="TomTat" name="TomTat" class="form-control ckeditor" rows="3">
                                    {{$truyen->TomTat}}
                                </textarea>
                            </div>


                            <div class="form-group">
                                <label>Hình </label>
                               <p>
                                <img width="100px;" src="upload/truyen/{{$truyen->Hinh}}">
                                </p>
                                <input type="file" name="Hinh">
                            </div>

                            <div class="form-group">
                                <label>Tác Gỉa </label>
                                <input class="form-control" name="idtacgia" value="{{$truyen->idtacgia}}" />

                            </div>

                            <div class="form-group">
                                <label>Nổi Bật</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="0" @if($truyen-> NoiBat == 0)
                                        {{"checked"}}
                                    @endif
                                     type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" @if($truyen-> NoiBat == 1)
                                        {{"checked"}}
                                    @endif
                                     type="radio">Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">
                                <a href="admin/truyen/danhsach">TẠO MỚI</a>
                            </button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row comment-->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">COMMENT
                            <small>DANH SÁCH COMMENT</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>NGƯỜI DÙNG</th>
                                <th>NỘI DUNG</th>   
                                <th>NGÀY ĐĂNG</th>
                                <th>XÓA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($truyen->comment as $cm)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{ $cm -> id }} </td>
                                <td>{{ $cm -> user -> name }} </td>
                                <td>{{ $cm -> NoiDung }} </td>
                                <td>{{ $cm -> create_at }} </td>

                                <td class="center">

                                <button type="button" class="btn btn-danger" >
                                    <a href="admin/comment/xoa/{{ $cm -> id }}/{{$truyen->id}}" 
                                        style="color: white"
                                        class="glyphicon glyphicon-remove"></a>
                                </button>
                                </td>

                               

                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row comment -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection

@section('script')
    <script>
        $(document).ready(function(){
           $("#theloai").change(function(){
                var idTheLoai = $(#theloai).val();
                $get("admin/ajax/loaitin"+idTheLoai,function(data){
                      $("#loaitin").html(data);  
                });
           });
    </script>
@endsection