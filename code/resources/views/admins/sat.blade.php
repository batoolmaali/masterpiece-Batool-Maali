<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Under Construction</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="{{asset('assets/img/metis-tile.png')}}" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/lib/font-awesome/css/font-awesome.css')}}">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/metismenu/metisMenu.css')}}">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/onoffcanvas/onoffcanvas.css')}}">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/animate.css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/countdown.css')}}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="http://maps.google.com/maps/api/js"></script>
<script src="{{asset('assets/lib/gmaps/gmaps.min.js')}}"></script>
</head>

<body class="bgimage bg-greyfloral">
    <style>
  #map_canvas {
    width: 400px !important;
    height: 400px !important;
  }
</style>
    <div class="container">
        <div  class="bgimage bg-low_contrast_linen">
            <div class="logo" class="bgimage bg-low_contrast_linen">
                <h1><span class="text-warning" style="color:white;">Statistic</span></h1>
            </div>
        </div>
        <div class="clearfix">
            <div class="col-lg-12 title">
                <!-- <h2>Our Site <span class="orange">U</span>nder <span class="orange">C</span>onstruction</h2>
                <small>We are done with the backend just front end to go. The site will launch in:</small> -->
            </div>
        </div>
        <!--counter is here-->
        <div id="counter"></div>

        <div id="counter-default" class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$r}}</div>
                    <div class="timer-text">Customers</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            
     
            <div class="col-lg-3 col-sm-6">
                <div class="inner" >
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number" >{{$n}}</div>
                    <div class="timer-text" >Admin</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            
        
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$a}}</div>
                    <div class="timer-text">Companies</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$d}}</div>
                    <div class="timer-text">posts</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$z}}</div>
                    <div class="timer-text">offices</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$x}}</div>
                    <div class="timer-text">dresses shop</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$y}}</div>
                    <div class="timer-text">flowers shop</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$s}}</div>
                    <div class="timer-text">suits shop</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$m}}</div>
                    <div class="timer-text">Dresses</div>
                    <div class="progress mini progress-striped active">
                        <div id="hour-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            
       
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$f}}</div>
                    <div class="timer-text">Flowers</div>
                    <div class="progress mini progress-striped active">
                        <div id="day-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div class="timer-number" >{{$l}}</div>
                    <div class="timer-text">Suits</div>
                    <div class="progress mini progress-striped active">
                        <div id="minute-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div class="timer-number" >{{$h}}</div>
                    <div class="timer-text">Halls</div>
                    <div class="progress mini progress-striped active">
                        <div id="minute-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div class="timer-number" >{{$p}}</div>
                    <div class="timer-text">photographers</div>
                    <div class="progress mini progress-striped active">
                        <div id="minute-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$t}}</div>
                    <div class="timer-text">city</div>

                    <div class="progress mini progress-striped active">
                        <div id="second-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$dress}}</div>
                    <div class="timer-text">order dresses</div>

                    <div class="progress mini progress-striped active">
                        <div id="second-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$flower}}</div>
                    <div class="timer-text">order flowers</div>

                    <div class="progress mini progress-striped active">
                        <div id="second-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$suit}}</div>
                    <div class="timer-text">order suits</div>

                    <div class="progress mini progress-striped active">
                        <div id="second-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$city}}</div>
                    <div class="timer-text">order cities</div>

                    <div class="progress mini progress-striped active">
                        <div id="second-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$hall}}</div>
                    <div class="timer-text">order halls</div>

                    <div class="progress mini progress-striped active">
                        <div id="second-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="inner">
                <div class="bgimage bg-low_contrast_linen">
                    <div  class="timer-number">{{$Photographer}}</div>
                    <div class="timer-text">order photographers</div>

                    <div class="progress mini progress-striped active">
                        <div id="second-bar" class="progress-bar progress-bar-warning"></div>
                    </div>
                </div>
                </div>
                <!-- /.inner -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="progress progress-striped active" rel="tooltip" data-placement="bottom"
                     data-original-title="Total Progress" >
                    <div id="total-bar" class="progress-bar progress-bar-warning" style="background-color:black;"></div>
                </div>
            </div>
        </div>
        <hr/>
        <!-- .row -->
       
          
   
     
    </div>


    <!--jQuery -->
    <script src="{{asset('assets/lib/jquery/jquery.js')}}"></script>

    <!--Bootstrap -->
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.0.1/jquery.plugin.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.0.1/jquery.countdown.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script src="{{asset('assets/js/countdown.js')}}"></script>
</body>

</html>
