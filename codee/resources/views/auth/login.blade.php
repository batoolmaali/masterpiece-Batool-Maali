
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/weddingdreams/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 13:07:02 GMT -->
<head>
<meta charset="UTF-8">
<meta property="og:title" content="Wedding">
	<meta name="keywords" content="wedding
,wedding dresses,bride,engagement,
,wedding invitations,wedding planner,wedding anniversary,bridal dresses,wedding photography,wedding gifts,wedding venues near me,wedding venues,outdoor wedding venues,
indoor wedding venues,wedding reception venues,wedding hall,affordable wedding venues,places to get married near me,wedding halls near me,small wedding venues near me,bridal shower venues near me,garden wedding venues,places to get married,
wedding sites,unique wedding venues,farm wedding,suit,men,women,Flowers,wedding Flowers,Flower Collections,birthday flowers,
Wedding Florist,Event Flowers,photography editing,photo,fashions,travel.honymoon,Travel And Tourism Websites,package
,vacation packages,photo studio,photo gallery,photo shoot
,couple photos,Memories,View Partners & Travel Deals,suit men,">
  <meta name="author" content="Batool Maali">
<meta property="og:description" content="It is an
integrated site that brings together everything related to those who are about to get
married, all under one roof which helps them find everything they need without making
any additional efforts, in record time and at low prices.
The services provided by this site include the ability to reserve wedding dresses / flowers
/ formal suits / halls / photographers through direct access to the providers of these
services through this site, which guarantees them to obtain low prices if the reservation
is made through the site, as well as It also provides offers that include integrated
packages.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>

<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}"type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/elegant-icons.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/nice-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/slicknav.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/style.css')}}" type="text/css">
<style>
	.footer-dark {
  padding:20px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
 
  font-size:17px;
  margin-bottom:0;
  color:#fff;
}
	</style>
</head>
<body>



<section class="callto spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="callto__content set-bg" data-setbg="{{asset('theme/img/team/callto-bg.png')}}">
<div class="callto__text">
<form method="POST" action="{{ route('login') }}">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input  type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email" name="email" value="{{ old('email') }}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    
    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
    <input type="password"  class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1"  placeholder="Password" name="password" autocomplete="current-password">
    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>

  <button type="submit" class="site-btn" style="background-color:#767b67;margin-right: 3%;" >submit</button>
  <button type="submit" class="site-btn" style="background-color:#767b67;" ><a href="{{ route('register') }}" style="color: white;">register</a></button>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="footer-dark" style="background-color:#767b67">
<footer>
            <div class="container">
                <div class="row" style="margin-top: 7%;">
                <div class="col-sm-12 col-md-3 item" >
                        <h4 class="eltdf-iwt-title" style="color: #ffffff;text-transform: uppercase;font-family:Cormorant Garamond,serif; font-size: 24px;text-align:left;letter-spacing: .15em;font-weight: 400">Companies</h4>
                        <ul>
                            <li class="eltdf-iwt-subtitle" style="color: #ffffff;text-transform: uppercase;font-family:Cormorant Garamond,serif;text-align:left;font-style: italic;font-size: 18px;font-weight: 400" >Wedding</a></li>
                            <li class="eltdf-iwt-subtitle" style="color: #ffffff;text-transform: uppercase;text-align:left; font-size: 12px;margin-top:5%;margin: 19px 2px 0;font-family: Muli,sans-serif;font-weight: 300">Excepteur sint occaecat cupidatat non proident, sunt in culpa</a></li>
            
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3 item" >
                        <h4 class="eltdf-iwt-title" style="color: #ffffff;text-transform: uppercase;font-family:Cormorant Garamond,serif; font-size: 24px;text-align:left;letter-spacing: .15em;font-weight: 400">Shops</h4>
                        <ul>
                            <li class="eltdf-iwt-subtitle" style="color: #ffffff;text-transform: uppercase;font-family:Cormorant Garamond,serif;text-align:left;font-style: italic;font-size: 18px;font-weight: 400" >Wedding</a></li>
                            <li class="eltdf-iwt-subtitle" style="color: #ffffff;text-transform: uppercase;text-align:left; font-size: 12px;margin-top:5%;margin: 19px 2px 0;font-family: Muli,sans-serif;font-weight: 300">Excepteur sint occaecat cupidatat non proident, sunt in culpa</a></li>
            
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3 item" >
                        <h4 class="eltdf-iwt-title" style="color: #ffffff;text-transform: uppercase;font-family:Cormorant Garamond,serif; font-size: 24px;text-align:left;letter-spacing: .15em;font-weight: 400">Offices</h4>
                        <ul>
                            <li class="eltdf-iwt-subtitle" style="color: #ffffff;text-transform: uppercase;font-family:Cormorant Garamond,serif;text-align:left;font-style: italic;font-size: 18px;font-weight: 400" >Wedding</a></li>
                            <li class="eltdf-iwt-subtitle" style="color: #ffffff;text-transform: uppercase;text-align:left; font-size: 12px;margin-top:5%;margin: 19px 2px 0;font-family: Muli,sans-serif;font-weight: 300">Excepteur sint occaecat cupidatat non proident, sunt in culpa</a></li>
            
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3 item" >
                        <h4 class="eltdf-iwt-title" style="color: #ffffff;text-transform: uppercase;font-family:Cormorant Garamond,serif; font-size: 24px;text-align:left;letter-spacing: .15em;font-weight: 400">Photographers</h4>
                        <ul>
                            <li class="eltdf-iwt-subtitle" style="color: #ffffff;text-transform: uppercase;font-family:Cormorant Garamond,serif;text-align:left;font-style: italic;font-size: 18px;font-weight: 400" >Wedding</a></li>
                            <li class="eltdf-iwt-subtitle" style="color: #ffffff;text-transform: uppercase;text-align:left; font-size: 12px;margin-top:5%;margin: 19px 2px 0;font-family: Muli,sans-serif;font-weight: 300">Excepteur sint occaecat cupidatat non proident, sunt in culpa</a></li>
            
                        </ul>
                    </div>
                 
                    <div class="col item social"></div>
                </div>
                <p class="copyright"></p>
            </div>
            <div class="col item social" style="margin: auto;margin-top: 2%;"><img style="  margin: auto;
                                     display: block;" src="https://i.ibb.co/SQM410c/hfjd.png" alt="hfjd" ></div>
									<p class="copyright"  style="color:white; text-align:center;margin-bottom:0">PARADISE © 2021</p>
								</div>
        </footer>
    </div>




<script src="{{asset('theme/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('theme/js/mixitup.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('theme/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('theme/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('theme/js/main.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>

<!-- Mirrored from preview.colorlib.com/theme/weddingdreams/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 13:07:08 GMT -->
</html>


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->