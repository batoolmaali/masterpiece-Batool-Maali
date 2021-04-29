<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/weddingdreams/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 13:07:02 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="Dreams Template">
<meta name="keywords" content="Dreams, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dreams | Template</title>

<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}"type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/elegant-icons.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/nice-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/slicknav.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('theme/css/style.css')}}" type="text/css">
</head>
<body>



<section class="callto spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="callto__content set-bg" data-setbg="{{asset('theme/img/team/callto-bg.png')}}">
<div class="callto__text">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
    <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Password" name="password">
  </div>

  <button type="submit" class="site-btn" style="background-color:#767b67">submit</button>
</div>
</div>
</div>
</div>
</div>
</section>





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


<div class="container">
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
</div>