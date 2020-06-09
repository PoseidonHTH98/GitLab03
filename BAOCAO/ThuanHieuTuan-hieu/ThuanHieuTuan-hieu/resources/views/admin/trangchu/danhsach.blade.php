@extends('admin.layout.index')

@section('content')

   <div id="page-wrapper">
            <div class="container-fluid">


			
    
      <div id="first-header">
        <h1>MANGA HOT Dashboard</h1>
      </div>
      <div class="grid">
        <div class="col">
          <div class="card-container">
            <div class="card" id="b-card-facebook">
              <div class="border"></div>
              <p class="light-blue social-username">
                
            	  <h4 class="light-blue data-type">Số Lượng Truyện</h4>   
              </p>
              <h1>{{$truyen->count()}}</h1>

               <button type="button"  class="btn btn-light" style="width:100px;background:#4F86F7; ">
			        <a href="admin/truyen/danhsach" style="color:white;"><h5> Chi Tiết </h5>  </a>											   		
			 </button>
            
           
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card-container">
            <div class="card" id="b-card-instagram">
              <div class="border"></div>
               <p class="light-blue social-username">
                
            	  <h4 class="light-blue data-type">Số Lượng Chương</h4>   
              </p>
              <h1>{{$chap->count()}}</h1>
              
               <button type="button"  class="btn btn-light" style="width:100px;background:#fd5b78; ">
			        <a href="admin/chap/danhsach" style="color:white;"><h5> Chi Tiết </h5>  </a>											   		
			 </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card-container">
            <div class="card" id="b-card-pinterest">
              <div class="border"></div>
              <p class="light-blue social-username">
                
            	  <h4 class="light-blue data-type">Số Lượng Người Dùng</h4>   
              </p>
              <h1>{{$user->count()}}</h1>

               <button type="button"  class="btn btn-light" style="width:100px;background:red; ">
			        <a href="admin/user/danhsach" style="color:white;"><h5> Chi Tiết </h5>  </a>											   		
			 </button>
          
            </div>
          </div>
        </div>
         <div class="col">
          <div class="card-container">
            <div class="card" id="b-card-twitter">
              <div class="border"></div>
               <p class="light-blue social-username">
                
            	  <h4 class="light-blue data-type">Số Lượng Bình Luận</h4>   
              </p>
              <h1>{{$comment->count()}}</h1>

               <button type="button"  class="btn btn-light" style="width:100px;background:#50BFE6; ">
			        <a href="admin/comment/danhsach" style="color:white;"><h5> Chi Tiết </h5>  </a>											   		
			 </button>
        
            </div>
          </div>
        </div>
    
      
        </div>
    </div>


@endsection


