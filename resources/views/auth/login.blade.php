@extends('layouts.app')

@section('content')
<style>
    .invalid-feedback {
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #e3342f;
}
</style>
<section class="section section-title section-text-light section-background section-center" style="background-image: url({{asset('images/custom-header-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-weight-normal custom-font-size-2 m-none pb-sm">Login</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <?php 
                if(isset($_GET['success'])){
            ?>
                <div class="alert alert-success  mt-lg text-center" id="" >
                    <strong></strong> Registration completed successfully
                </div>
            <?php   
                 }
            ?>
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="account-wall">
                    <img class="profile-img" src="/frontendFiles/img/icons/login.png"
                        alt="">
                    <form class="form-signin"  method="POST" id="login" action="{{ route('login') }}">
                        @csrf
                        <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required  autofocus>
                        
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" >
                        
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <button class="btn btn-lg btn-primary btn-block" id="loginBtn" type="submit" >
                            Sign in</button>
                        <label class="checkbox pull-left">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} value="remember-me">
                            Remember me
                        </label>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"" class="pull-right need-help">Create new account </a><span class="clearfix"></span>
                        @endif
                    </form>
                </div>
                <!-- <a href="#" class="text-center new-account">Create an account </a> -->
            </div>
        </div>
    </div>
</section>
<!--End Content-->


<script>
    $(document).ready(function(){ 
    // $("#login").submit(function(event) {
        $(document).on('click','#loginBtn',function(event){
            event.preventDefault();
            // alert('test');
            postLG();
        // $('#loginBtn').prop('disabled', false); //disable the submit 
        // $('#password').prop('disabled', false); //disable the password feild 
        // $('#email').prop('disabled', false); //disable the username feild
            // $("#login").submit();
        // console.log('ccccccccccccccccccccccccccccccccccccccmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmccccccc');
        });
    });
</script>
@endsection
