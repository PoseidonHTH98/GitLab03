<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light " >
  <a class="navbar-brand" href="trangchu" style="color:black;font-weight:200px;font-size:30px;  ">MANGA-HOT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
     
      
    
    </ul>
    
    <form class="form-inline my-2 my-lg-0" style="margin-right:20px;">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  

    <div class="btn-group">
                <!-- /.dropdown -->
        
              
             @if(Auth::check())
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:200px;height:65px;background:#103E4B;">
                    <a class="pull-left" href="#">
                         <img class="media-object" src="upload/avatar/{{Auth::user()->Hinh}}" alt="" style="width:40px;height:40px;border-radius:15px;background:white; ">
                    </a>
                   
                       {{Auth::user()->name}}      
                    
                <li class="dropdown" >
                    
                  

                   
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" style="text-align:center;">
                        <li ><a href="nguoidung"> 
                          <svg class="bi bi-person-bounding-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

                            <path fill-rule="evenodd" d="M1.5 1a.5.5 0 00-.5.5v3a.5.5 0 01-1 0v-3A1.5 1.5 0 011.5 0h3a.5.5 0 010 1h-3zM11 .5a.5.5 0 01.5-.5h3A1.5 1.5 0 0116 1.5v3a.5.5 0 01-1 0v-3a.5.5 0 00-.5-.5h-3a.5.5 0 01-.5-.5zM.5 11a.5.5 0 01.5.5v3a.5.5 0 00.5.5h3a.5.5 0 010 1h-3A1.5 1.5 0 010 14.5v-3a.5.5 0 01.5-.5zm15 0a.5.5 0 01.5.5v3a1.5 1.5 0 01-1.5 1.5h-3a.5.5 0 010-1h3a.5.5 0 00.5-.5v-3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>


                          {{Auth::user()->name}}</a>
                        <hr></li>
                       
                        <li><a href="them">
                           
                        <p>Thêm Truyện</p></a>
                        <hr></li>
                        <li><a href="themchap">
                            

                        <p>Thêm Chap Mới</p></a>
                        <hr></li>

                         <li><a href="nguoidung">
                         
                        </i> Truyện Bạn Đã Đăng</a>
                        <hr></li>

                        

                        <li class="divider"></li>
                        <li><a href="dangxuat"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                      </div>
                    </div>
                  </div>
                    <!-- /.dropdown-user -->
                </li>

                  </button>
             
           
          
     
          
             @else
                
                  <button type="button" class="btn btn-success" >
                       <a class="nav-link" href="dangnhap" style="color:white;float:left;">Đăng Nhập</a>
                  </button>
                 




                <!-- /.dropdown -->
            @endif
                <!-- /.dropdown -->
            </ul>
                <!-- /.dropdown -->
         
            </ul>
</nav>





<nav  style="background: #103E4B;">
 
  

    <ul class="navbar-nav mr-auto">
      
      <h5 style="margin-top:10px;">    
        <a href="danhsach"> <i class="fas fa-bars" style="color:white; "> Danh Sách Truyện</i>  </a> 
          

           @foreach($theloai as $tl)

                        
              <div class="dropdown">
              
                <a href="theloai/{{$tl->id}}/{{$tl->TenKhongDau}}.html"><h5 style="color:white;">{{$tl->Ten}}</h5></a>
              <div class="dropdown-content" >
             
                        @foreach($tl->loaitin as $lt)
                          
                           <ul>
                          <a href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html" >
                            <p style="color:black;float:left;">{{$lt->Ten}}</p></a>
                             </ul>
                          
                             
                        @endforeach
                       
              </div>
            </div>
                  @endforeach

         @if(Auth::check()) 


                <button type="submit" class="btn btn-default " style="background:#F25757;float:right;width:143px;height:40px;margin-right:10px;   ">
                     <small style="font-size:12px;padding-top:40px;  ">
                      <a href="them" style="color:white"; class="fa fa-upload" >Upload </a></small>
                </button>


        @else
                        
                    
                <button type="submit" class="btn btn-default " style="background:#F25757;float:right;width:143px;height:40px;margin-right:10px;   ">
                     <small style="font-size:12px;padding-top:40px;  ">
                      <a href="them" style="color:white"; class="fa fa-upload" >Upload </a></small>
                </button>

         @endif
                  
     </h5>
      
        
    
    </ul>


  <ul class="navbar-nav mr-auto" style="float:right;">
      
    
      
    
    
    </ul>

    
   
    
          </div>
</nav>



    