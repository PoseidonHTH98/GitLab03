   <div class="col-md-3 " style="float:right; ">
               	

 
				    <table class="table table-striped">
					  	<div class="panel-heading" style="background:#F80C54; color:white;height:44px;padding-top:10px;padding-left:15px; " >
	            		<h4 >Top 3 MANGAHOT </h4>
	            		</div>
					    @foreach($truyen->where('SoLuotXem','>=',6)->sortByDesc('SoLuotXem')->take(3) as $tr)
										<div class="col"  style="margin-left:30px;margin-top:20px;margin-bottom:10px; ">
												<tr>
												<td>  
														 <a href="truyen/{{$tr->id}}/{{$tr->TieuDeKhongDau}}.html">
						                                    <img class="img-responsive" src="upload/truyen/{{$tr->Hinh}}" 
						                                    style="width:100px; height:100px;float:left;" >
						                                    <h4 style="float:right;color:black;margin-top:30px;margin-left:5px;  ">{{$tr->SoLuotXem}} View</h4>
						                                </a>
														<a  href="truyen/{{$tr->id}}/{{$tr->TieuDeKhongDau}}.html"><p class="tentruyen">
														<h5 style="color:black">{{ Str::limit($tr-> TieuDe, 30) }} 	</h5>
														
														</a>
													</td>
								  				</tr>
										</div>
								
						   @endforeach

						 
			
					    </tbody>
					  </table>
		

   		

		               

                <ul class="list-group" id="menu" style="margin-bottom:10px; ">
                    <li href="#" class="list-group-item menu1 active"  style="text-align:center;">
                    	 	<h4>Thể Loại Truyện</h4>
                    </li>

                    @foreach($theloai as $tl)

	                      
	                    <div class="dropdown">
						   <button class="dropbtn" style="background:white;color:black; width:254px;  ">
						   	<h5><a href="theloai/{{$tl->id}}/{{$tl->TenKhongDau}}.html">{{$tl->Ten}}</a></h5></button>
						  <div class="dropdown-content">
						  <ul>
		                    	@foreach($tl->loaitin as $lt)
		                
		                			<a href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a>
		          
		                		@endforeach
		                    </ul>
						  </div>
						</div>
		              @endforeach


                     
                </ul>


                 <div class="fb-page" data-href="https://www.facebook.com/CaTimOnline1/" data-tabs="timeline" data-width="280" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" magirn-top="10px"><blockquote cite="https://www.facebook.com/CaTimOnline1/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CaTimOnline1/">Cà Tím online</a></blockquote></div>
            </div>

