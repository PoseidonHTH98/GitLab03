@extends('layout.index')


@section('content')


    <div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card" style="margin-top:50px;border:1px solid white; border-radius:20px;padding:10px;   ">
            
                <div class="login-panel panel panel-default" style="padding-left:20px;width:400px;border:1px solid black;padding-right:20px;padding-bottom:10px;border:1px solid black; border-radius:20px;    ">
                
                    <div class="panel-body">
                        
                         @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                @endforeach
                            </div>
                        @endif   


                        @if(session('thongbao1'))
                           
                                {{session('thongbao1')}}
            
                        @endif


                        <?php
                            if(isset($_POST['submit'])){
                               $email;
                               $password;
                               $captcha;
                               if(isset($_POST['email'])){
                                  $email = $_POST['email'];
                               }
                               if(isset($_POST['password'])){
                                  $password = $_POST['password'];
                               }
                               if(isset($_POST['g-recaptcha-response'])){
                                  $captcha = $_POST['g-recaptcha-response'];
                               }
                               if(!$captcha){
                                  echo '<h2>Hay xac nhan CAPTCHA</h2>';
                               }else{
                                  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ldgl_sUAAAAAJW5dOep4PUVqkgW7T-AHBSnvRME&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
                                  if($response.success == false){
                                     echo '<h2>SPAM!</h2>';
                                  }else{
                                     echo '<h2>'.$name.' Khong phai robot :)</h2>';
                                  }
                               }
                            }
                            ?>
                            <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>

                        <form role="form" action="dangnhap" method="POST">
                            <h1 class="panel-title" style="margin-top:40px;text-align:center;font-size:30px;font-weight:bold;">Đăng Nhập</h1>
                            <fieldset style="margin-top:20px; ">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">  
                                
                                <div class="txtb">
                                     
                                    <input placeholder="E-mail" name="email" type="email" autofocus>
                                   
                                </div>
                                
                                <div  class="txtb">
                                   
                                    <input  placeholder="Mật Khẩu" name="password" type="password" value="">
                                    
                                </div>

                                <div class="g-recaptcha" data-sitekey="6Ldgl_sUAAAAAJuZSeiRoNQpvyrvXNVcDdb4SQyi"></div>
                                <input type="submit" class="logbtn" value=" Đăng Nhập" 

                                style="margin-top:50px;border: 2px solid white;padding: 10px;border-radius: 40px; " >
                            </fieldset>
                        </form>
                        </div>
                            
                        

                        <div class="card-footer" style="margin-top:20px;border-radius: 40px;  ">
                            <div class="d-flex justify-content-center links">
                                Bạn Muốn Đăng Ký Tài Khoản Không
                                <br>
                                <a href="dangky"> 
                                Đăng Ký</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#">Quên Mật Khẩu</a>
                            </div>
                        </div>          
                    </div>
  
            
        </div>
    </div>
</div>

@endsection