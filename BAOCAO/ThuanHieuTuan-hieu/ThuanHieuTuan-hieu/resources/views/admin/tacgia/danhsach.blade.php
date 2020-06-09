@extends('admin.layout.index')

@section('content')

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">TÁC GIẢ
                            <small>DANH SÁCH TÁC GIẢ</small>
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
                            <tr align="center" style="background:  #ff6e6c;color:white;">
                                <th>ID</th>
                                <th>TÊN</th>
                                <th>XÓA</th>
                                <th>SỬA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tacgia as $tg)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{ $tg -> id }} </td>
                                <td>{{ $tg -> ten }} </td>

                            
                                

                                <td class="center">

                                <button type="button" class="btn btn-danger" >
                                    <a href="admin/tacgia/xoa/{{ $tg -> id }}" 
                                        style="color: white"
                                        class="glyphicon glyphicon-remove"></a>
                                </button>
                                </td>

                                <td class="center">

                                <button type="button" class="btn btn-success" >
                                    <a href="admin/tacgia/sua/{{ $tg -> id }}" 
                                        style="color: white" 
                                        class="glyphicon glyphicon-pencil"></a>
                                </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>



@endsection