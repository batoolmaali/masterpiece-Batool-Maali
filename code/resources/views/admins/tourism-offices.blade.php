<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="{{asset('assets/img/metis-tile.png')}}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/lib/metismenu/metisMenu.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/onoffcanvas/onoffcanvas.css')}}">

    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/animate.css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/font-awesome/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<![endif] -->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="{{asset('assets/css/style-switcher.css')}}">
    <link rel="stylesheet/less" type="text/css" href="{{asset('assets/less/theme.less')}}">
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js')}}"></script>

</head>

<body class="  ">
    <div class="bg-dark dk" id="wrap">
        <div id="top">
            <!-- .navbar -->
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">


                    <!-- Brand and toggle get grouped for better mobile display -->
                    <header class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand"><img style="width:100px;padding:2%;margin-left:10%" src="https://i.ibb.co/KFHbd8z/Copy-of-Copy-of-Copy-of-Elegant-Wedding-Logo-Design-With-Leaf-Branches-And-Heart-3.png" class="vc_single_image-img attachment-full" alt="d"></a>

                    </header>



                    <div class="topnav">

                        <div class="btn-group">

                            <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                                <i class="fas fa-qustion"></i>
                            </a>
                            <a data-placement="bottom" class="btn btn-default btn-sm" href="homepage"><i class="fas fa-home fa-1x" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <!-- {{ __('Logout') }} -->
                                <i class="fas fa-power-off"></i>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </a>
                        </div>
                        <div class="btn-group">
                            <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                <i class="fas fa-bars"></i>
                            </a>
                            <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                                <span class="fas fa-fw fa-comment"></span>
                            </a>
                        </div>

                    </div>




                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                        <!-- .nav -->


                        <!-- /.nav -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!-- /.navbar -->
            <header class="head">
                <div class="search-bar">
                    <form class="main-search" action="">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Live ">
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                   
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.main-search -->
                </div>
                <!-- /.search-bar -->
                <div class="main-bar">
                    <h3>
                        <i class="fas fa-dashboard"></i>&nbsp;
                        Manage Office
                    </h3>
                </div>
                <!-- /.main-bar -->
            </header>
            <!-- /.head -->
        </div>
        <!-- /#top -->
        <div id="left">
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fas fa-user"></span>
                </div>
                <!-- {{$image = Auth::guard('admin')->user()->admin_image}} -->
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <img class="media-object img-thumbnail user-img" style="width:150px;height:150px" alt="User Picture" src='{{asset("images/$image")}}'>
                        <span class="label label-danger user-label">16</span>
                    </a>

                    <div class="media-body">
                    <h5 class="media-heading">&nbsp;&nbsp;Administrator: {{Auth::guard('admin')->user()->role}} {{Auth::guard('admin')->user()->name}} </h5>
                        <ul class="list-unstyled user-info">
                        
                            <li>&nbsp;&nbsp;Last Access : {{Auth::guard('admin')->user()->created_at->toDayDateTimeString()}} 
                                <!-- <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li class="nav-header">Menu</li>
                <li class="nav-divider"></li>
                <li class="">
                    <a href="admin">
                        <i class="fas fa-dashboard"></i><span class="link-title">&nbsp;manage Admin</span>
                    </a>
                </li>
                <li class="">
                    <a href="user">
                        <i class="fas fa-user"></i>
                        <span class="link-title">manage user</span>

                    </a>

                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="link-title">shops</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="collapse">
                        <li>
                            <a href="shopdresses">
                                <i class="fas fa-angle-right"></i>&nbsp; shop dresses</a>
                        </li>
                        <li>
                            <a href="flowershop">
                                <i class="fas fa-angle-right"></i>&nbsp; shop flower</a>
                        </li>
                        <li>
                            <a href="shopsuit">
                                <i class="fas fa-angle-right"></i>&nbsp; shop suit</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="photographers">
                        <i class="fas fa-camera"></i>
                        <span class="link-title">
                            photographers
                        </span>

                    </a>

                </li>
                <li>
                    <a href="order">
                        <i class="fas fa-list-ul"></i>
                        <span class="link-title">manage order</span>
                    </a>
                </li>
                <li>
                    <a href="packages">
                        <i class="fas fa-list-ul"></i>
                        <span class="link-title">manage packages</span>
                    </a>
                </li>
                <li>
                    <a href="hall">
                        <i class="fas fa-h-square"></i>
                        <span class="link-title">
                            halls </span> </a>
                </li>
                <li>
                    <a href="tourism-offices">
                        <i class="fas fa-map-marker"></i><span class="link-title">
                            tourism offices
                        </span>
                    </a>
                </li>
                <li>
                    <a href="dresses">
                        <i class="fas fas fa-bar-chart-o"></i>
                        <span class="link-title">
                            dresses
                        </span>
                    </a>
                </li>
                <li>
                    <a href="suit">
                        <i class="fas fas fa-bar-chart-o"></i>
                        <span class="link-title">
                            Suits
                        </span>
                    </a>
                </li>
                <li>
                    <a href="flower">
                        <i class="fas fa-tree"></i>
                        <span class="link-title">
                            flower </span>
                    </a>
                </li>
                <li>
                    <a href="Tourist_destinations">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span class="link-title">
                            tourist destination
                        </span>

                    </a>

                </li>
                <li>
                    <a href="company">
                        <i class="fas fa-columns"></i>
                        <span class="link-title">
                            manage company
                        </span>
                    </a>
                </li>
                <li>
                    <a href="post1">
                        <i class="fas fa-columns"></i>
                        <span class="link-title">
                            post
                        </span>
                    </a>
                </li>
                <li>
                    <a href="customer-message">
                        <i class="fas fa-columns"></i>
                        <span class="link-title">
                            Contact
                        </span>
                    </a>
                </li>
                <li>
                    <a href="reports">
                        <i class="fas fa-columns"></i>
                        <span class="link-title">
                            reports
                        </span>
                    </a>
                </li>
                <li>
                    <a href="Statistics">
                        <i class="fas fa-columns"></i>
                        <span class="link-title">
                            Statistics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="stock">
                        <i class="fas fa-columns"></i>
                        <span class="link-title">
                            Stock
                        </span>
                    </a>
                </li>

                <!-- /#menu -->
        </div>
        <!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="text-center">
                               <div class="row">
                                  <div class="col-lg-10">
                                     <div class="box dark" >
        <header>
            <div class="icons"><i class="fas fa-plus"></i></div>
            <h5>Add Office</h5>
            <!-- .toolbar -->
            <div class="toolbar" >
              <nav style="padding: 8px;">
                 <a href="javascript:;" class="btn btn-default btn-sm collapse-box">
                      <i class="fas fa-minus"></i> 
                  </a>
                 
                  <a href="javascript:;" class="btn btn-danger btn-sm close-box">
                      <i class="fas fa-times"></i>
                  </a>
              </nav>
            </div>           
        </header>

        <div id="div-1" class="body">
        <form class="form-horizontal"  action="/tourism-offices/store" method="post" >
            @csrf
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Toursim Office Name</label>
                    <div class="col-lg-8">
                    <input type="text" id="text1" placeholder="Toursim Office Name" class="form-control" name="office_name">
                    </div>
                    @error("office_name")
                    <p style="color:red;">{{$message}}</p>
                    @enderror 
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Toursim Office Email</label>
                    <div class="col-lg-8">
                    <input class="form-control" type="text" id="text1"
                    data-placement="top"  placeholder="Toursim Office Email" name="office_email"/>
                    </div>
                    @error("office_email")
                    <p style="color:red;">{{$message}}</p>
                    @enderror 
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-label col-lg-4">Toursim Office Phone</label>
                    <div class="col-lg-8">
                    <input type="text" id="text2" placeholder="Toursim Office Phone" class="form-control" name="office_phone" >
                    </div>
                    @error("office_phone")
                    <p style="color:red;">{{$message}}</p>
                    @enderror 
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-label col-lg-4">Toursim Office Address</label>
                    <div class="col-lg-8">
                    <input type="text" id="text2" placeholder="Toursim Office Address" class="form-control"  name="office_address">
                    </div>
                    @error("office_address")
                    <p style="color:red;">{{$message}}</p>
                    @enderror 
                </div>
                <!-- /.form-group -->
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
 
                      <div class="row">
                      <div class="table-responsive">
                      <div class="col-lg-10">
                      <div class="box">
            <header>
                <h5>Office table</h5>
                <div class="toolbar">
               
                    <div class="btn-group">
                        <a href="#stripedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                            <i class="fas fa-angle-up"></i>
                        </a>
                        <a class="btn btn-danger btn-sm close-box"><i class="fas fa-times"></i></a>
                    </div>
                </div>
            </header>
            <div class="table-responsive">
            <div id="stripedTable" class="body collapse in">
            <div class="col-lg-12">
             <table class="table table-striped responsive-table">
                    <thead>
                        <tr>
                            <td><b>id</b></td>
                            <td><b>Tourism Offices Name</b></td>
                            <td><b>Tourism Offices Email</b></td>
                            <td><b>Tourism Offices Phone</b></td>
                            <td><b>Tourism Offices Address</b></td>
                            
                            <td><b>Delete</b></td>
                            <td><b>Edit</b></td>
                        </tr>
       
                    </thead>
                    <tbody>
                    @foreach($x as $value) 
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->office_name}}</td>
                            <td>{{$value->office_email}}</td>
                            <td>{{$value->office_phone}}</td>
                            <td>{{$value->office_address}}</td>
                        <td>                  
                            <form method="post" action="/tourism-offices/delete/{{$value->id}}">
                            @method("DELETE")
                            @csrf
                           <input type="submit" value="Delete" class="btn btn-danger">
                           </form>
                           </td>
                           <td>
                            <button class="btn btn-primary">
                            <a href="/tourism-offices/edit/{{$value->id}}" style="text-decoration:none; color:white;">Edit</a></button>
                          </td>
                       @endforeach
                       
                    </tbody> 
               </table>
               {!! $x->links(); !!}
            </div>
        </div>
    </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
    <!-- /.col-lg-6 -->
</div>
 </div>
</div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
           </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
     <!-- /#content -->

                    <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
                        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
                        <br>
                        <br>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
            <p>2021 &copy; Paradise</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="{{asset('assets/lib/jquery/jquery.js')}}"></script>

                    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js')}}"></script>
                    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js')}}"></script>
                    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js')}}"></script>
                    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js')}}"></script>
                    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js')}}"></script>
                    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js')}}"></script>
                    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js')}}"></script>
                    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js')}}"></script>

            <!--Bootstrap -->
            <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
            <!-- MetisMenu -->
            <script src="{{asset('assets/lib/metismenu/metisMenu.js')}}"></script>
            <!-- onoffcanvas -->
            <script src="{{asset('assets/lib/onoffcanvas/onoffcanvas.js')}}"></script>
            <!-- Screenfull -->
            <script src="{{asset('assets/lib/screenfull/screenfull.js')}}"></script>


            <!-- Metis core scripts -->
            <script src="{{asset('assets/js/core.js')}}"></script>
            <!-- Metis demo scripts -->
            <script src="{{asset('assets/js/app.js')}}"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src="{{asset('assets/js/style-switcher.js')}}"></script>
            @include('sweetalert::alert')
        </body>

</html>
