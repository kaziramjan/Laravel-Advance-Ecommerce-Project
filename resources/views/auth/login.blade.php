@extends('frontend.main_master')
@section('content')


<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-6 col-sm-6 sign-in">
    <h4 class="">Sign in</h4>
    <p class="">Hello, Welcome to your account.</p>
    <div class="social-sign-in outer-top-xs">
        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
    </div>
    <form class="register-form outer-top-xs" method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="email" name="email" :value="old('email')">
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" id="password" name="password">
        </div>
        <div class="radio outer-xs">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">{{ __('Remember me') }}!
            </label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forgot-password pull-right">{{ __('Forgot your password?') }}</a>
            @endif
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">{{ __('Log in') }}</button>
    </form>                 
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
    <h4 class="checkout-subtitle">Create a new account</h4>
    <p class="text title-tag-line">Create your new account.</p>
    <form class="register-form outer-top-xs" method="POST" action="{{ route('register') }}">
            @csrf
        
        <div class="form-group">
            <label class="info-title" for="name">Name <span>*</span></label>
            <input type="text" class="form-control unicase-form-control text-input" id="name" name="name" :value="old('name')" >
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="email">Email Address <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="email" name="email" :value="old('email')" >
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="phone">Phone Number <span>*</span></label>
            <input type="text" class="form-control unicase-form-control text-input" id="phone" name="phone">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="password">Password <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" id="password" name="password" >
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
         <div class="form-group">
            <label class="info-title" for="password_confirmation">Confirm Password <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" id="password_confirmation" name="password_confirmation" >
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">{{ __('Sign Up') }}</button>
    </form>
    
    
</div>  
<!-- create a new account -->           </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
@include('frontend.body.brands')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    </div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->


    <!-- For demo purposes – can be removed on production -->
    
    <script src="switchstylesheet/switchstylesheet.js"></script>
    
    <script>
        $(document).ready(function(){ 
            $(".changecolor").switchstylesheet( { seperator:"color"} );
            $('.show-theme-options').click(function(){
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
        });
    </script>
    <!-- For demo purposes – can be removed on production : End -->



@endsection