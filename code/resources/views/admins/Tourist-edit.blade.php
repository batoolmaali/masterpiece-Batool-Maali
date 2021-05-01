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
                        Manage Edit City
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
            <div class="icons"><i class="fa fa-edit"></i></div>
            <h5>Edit City</h5>
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
        <form class="form-horizontal"  action="/Tourist_destinations/update/{{$tourist->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4"> City Name</label>
                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder=" City Name" class="form-control" name="city_name" value="{{$tourist->city_name}}">
                    </div>
                    @error("city_name")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text" class="control-label col-lg-4">Price</label>
                    <div class="col-lg-8">
                    <input class="form-control" type="text" id="text1"
                    placeholder="Price"   data-placement="top" name="price" value="{{$tourist->price}}">
                    </div>
                    @error("Price")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="text" class="control-label col-lg-4">special price</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" id="text1"
                        placeholder="Price"   data-placement="top" name="special_price" value="{{$tourist->special_price}}">
                    </div>
                    @error("special_price")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="text" class="control-label col-lg-4">max_pacenger_count</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" id="text1"
                        placeholder="max_pacenger_count"   data-placement="top" name="max_pacenger_count" value="{{$tourist->max_pacenger_count}}">
                    </div>
                    @error("max_pacenger_count")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text" class="control-label col-lg-4">current_pacenger_count	</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" id="text1"
                        placeholder="current_pacenger_count	"   data-placement="top" name="current_pacenger_count" value="{{$tourist->current_pacenger_count}}">
                    </div>
                    @error("current_pacenger_count")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                 <label class="control-label col-lg-4">is available</label>
                 <div class="col-lg-8">
                   <select data-placeholder="Choose a Country..." class="form-control chzn-select" tabindex="2" name="is_available" value="{{$tourist->is_available}}">
                   <!-- <option value="">select</option> -->
                   <option value="yse">yes</option>
                   <option value="no">no</option>
                   </select>
                  </div>
                    @error("is_available")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                    </div>
                
                   <div class="form-group">
                    <label for="text" class="control-label col-lg-4">description</label>
                    <div class="col-lg-8">
                    <textarea id="w3review" class="form-control" name="city_desc" rows="4" cols="95" value="{{$tourist->city_desc}}">{{$tourist->city_desc}}  </textarea>
                    </div>
                    @error("city_desc")
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                    </div>
               
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-4">city image</label>
                    <div class="col-lg-8"><input type="file" name="city_image"></div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-4">tourism offices</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="select">
                      @foreach($office as $value)
                      <!-- <option value=""></option> -->
                      <option value="{{$value->id}}">{{$value->office_name}}</option>
                    @endforeach
                   </select>
                   </div>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
               
            </form>
        </div>
    </div>
</div>
@include('sweetalert::alert')
