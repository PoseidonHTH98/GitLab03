@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">TÁC GIẢ
                            <small>THÊM TÁC GIẢ MỚI</small>
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


                        <form action="admin/tacgia/them" method="POST"  >
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>TÊN TÁC GIẢ MỚI</label>
                                <input class="form-control" name="ten" placeholder="Nhập Tác Giả Mới" />
                            </div>

                             <div class="form-group">
                                <label>TÊN ID TRUYỆN MỚI</label>
                                <input class="form-control" name="idtruyen" placeholder="Nhập ID Truyện Mới" />
                            </div>
                          
                            <button type="submit" class="btn btn-default">THÊM</button>
                            <button type="reset" class="btn btn-default">
                                <a href="admin/tacgia/danhsach">TẠO MỚI</a>
                            </button>
                            </div>
                            
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection