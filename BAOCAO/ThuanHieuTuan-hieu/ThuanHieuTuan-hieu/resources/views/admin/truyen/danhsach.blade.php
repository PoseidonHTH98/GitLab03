@extends('admin.layout.index')

@section('content') 


 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Truyện
                            <small>Danh Sách Truyện</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center" style="background:  #ff6e6c;color:white;">
                                <th>ID</th>
                                <th>Tiêu Đề</th>
                                <th>Tiêu Đề Khong Dau</th>
                                <th>Hình Minh Họa</th>
                                <th>Tóm Tắt</th>
                                <th>Thể Loại</th>
                                <th>Loại Tin</th>
                                <th>Tác Gỉa</th>
                                <th>Số Lượt Xem</th>
                                <th>Nổi Bật</th>
                
                              
                               
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($truyen  as $tr)


                            
                            <tr class="odd gradeX" align="center">
                                <td>{{$tr-> id }}</td>
                                <td>{{$tr-> TieuDe }}</td>
                                <td>{{$tr-> TieuDeKhongDau }}</td>
                                <td>
                                <img width="100px" src="upload/truyen/{{$tr -> Hinh}}">
                                </td>
                                <td > {{ Str::limit($tr-> TomTat, 100) }}</td>
                                <td>{{$tr-> loaitin-> theloai->Ten }}</td>
                                <td>{{$tr-> loaitin->Ten }}</td>
                                <td>                                    

                                    @switch($tr-> idtacgia)
                                        @case(0)
                                            {{'Đang Cập Nhật'}}
                                            @break

                                        @case(1)
                                            {{'gudao'}}
                                            @break

                                        @case(2)
                                            {{'dad'}}
                                            @break

                                        @default
                                            {{'Đang Cập Nhật'}}
                                    @endswitch

                                </td>
                                <td>{{$tr-> SoLuotXem }}</td>
                                <td>
                                    @if($tr-> NoiBat == 1)
                                    {{'Có'}}
                                    @else
                                    {{'Không'}}
                                    @endif

                                </td>


                                <td class="center">

                                <button type="button" class="btn btn-danger" >
                                    <a href="admin/truyen/xoa/{{ $tr -> id }}" 
                                        style="color: white"
                                        class="glyphicon glyphicon-remove"></a>
                                </button>
                                </td>

                                <td class="center">

                                <button type="button" class="btn btn-success" >
                                    <a href="admin/truyen/sua/{{ $tr -> id }}" 
                                        style="color: white" 
                                        class="glyphicon glyphicon-pencil"></a>
                                </button>
                                </td>

                                 

                            @endforeach
                            </tr> 
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection