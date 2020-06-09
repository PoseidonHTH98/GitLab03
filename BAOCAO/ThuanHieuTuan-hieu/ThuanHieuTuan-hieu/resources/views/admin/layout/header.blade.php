<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="   background: linear-gradient(120deg,#de6161,#2657eb);">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin/truyen/danhsach"
                style="background:#2d334a;color:white; ">MANGA-HOT</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="background: #2d334a;">
                <!-- /.dropdown -->
                <li class="dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">
                        <i class="fa fa-user fa-fw"  ></i>  
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user"> 
                        
                        <li><a href="admin/user/danhsach/"><i class="fa fa-user fa-fw"></i>{{Auth::user()->name}}</a>
                        </li>
                        <li><a href="admin/user/sua/{{Auth::user()->id}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           @include('admin.layout.menu')
           
        </nav>