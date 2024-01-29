
@extends('template.main')

@section('title', 'Login | ')

@section('content')

<div class="main-wrapper d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="auth-wrapper w-100 my-4">
                    <div class="auth-box border-secondary rounded-15 shadow-sm">
                        <div id="loginform">
                            <div class="text-center p-b-20">
                                <span class="db"><a href="{{ route('site.home') }}"><img src="{{ asset('assets/images/logo/'.setting('site.logo')) }}" height="100" alt="logo" /></a></span>
                                <h3 class="mt-4">Masuk</h3>
                            </div>
                            <!-- Form -->
                            <form class="form-horizontal mt-2" id="loginform" action="{{ route('auth.postlogin') }}" method="post">
                                {{ csrf_field() }}
                                @if(isset($message))
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text p-0 border-0 rounded {{ $errors->has('username') ? 'border-danger bg-danger' : 'bg-success' }}" id="basic-addon1"><!-- <i class="ti-user"></i> --></span>
                                            </div>
                                            <input type="text" name="username" class="form-control rounded {{ $errors->has('username') ? 'border-danger' : '' }}" value="{{ old('username') }}" placeholder="Email atau Username" aria-label="Username" aria-describedby="basic-addon1">
                                            @if($errors->has('username'))
                                            <small class="form-row col-12 mt-1 text-danger">{{ ucfirst($errors->first('username')) }}</small>
                                            @endif
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text p-0 border-0 rounded {{ $errors->has('password') ? 'border-danger bg-danger' : 'bg-success' }}" id="basic-addon2"><!-- <i class="ti-pencil"></i> --></span>
                                            </div>
                                            <input type="password" name="password" class="form-control rounded-start {{ $errors->has('password') ? 'border-danger' : '' }}" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
                                            
                                                <a href="#" class="input-group-text btn-primary border-0 {{ $errors->has('password') ? 'border-danger bg-danger' : 'bg-theme-1' }}" id="btn-toggle-password"><i class="fa fa-eye"></i></a>
                                            
                                            @if($errors->has('password'))
                                            <small class="form-row col-12 mt-1 text-danger">{{ ucfirst($errors->first('password')) }}</small>
                                            @endif
                                        </div>
                                        <div class="lupa-password text-right mb-2">
                                            <a href="{{ route('auth.forgotpassword') }}" class="color-theme-1">Lupa password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="p-t-20">
                                                <button class="btn btn-primary fw-bold w-100 mb-3" type="submit">Masuk</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-0">
                                            <div class="">
                                                <p class="text-center">Belum punya akun?</p>
                                                <a class="btn btn-secondary fw-bold w-100" href="{{ route('auth.register') }}">Daftar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-12 col-lg-6 d-none d-lg-block">
                <div class="image-login">
                    <img src="{{ asset('assets/images/illustration/undraw_Login_re_4vu2.svg') }}" alt="img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css-extra')
<style type="text/css">
body{background-color: var(--bs-light);}
.main-wrapper{margin-top: 86px; min-height: calc(100vh - 22.5rem);}
.input-group>.input-group-append:not(:last-child)>.input-group-text {border-top-right-radius: 2px; border-bottom-right-radius: 2px;}
#btn-toggle-password {cursor: pointer;}
.auth-wrapper {
    min-height: unset; 
    position: relative;}
.auth-wrapper .auth-box {
    background: #fff;
    padding: 20px;
    max-width: unset;
    width: 75%;
    margin: 0 auto}
.image-login{margin: 10% 0;}
@media (max-width: 768px){
    .auth-box {width: 100%!important; margin: 0 auto}
}
</style>
@endsection

@section('js-extra')
<script>
$(document).on("click", "#btn-toggle-password", function(e){
    e.preventDefault();
    if(!$(this).hasClass("show")){
        $("input[name=password]").attr("type","text");
        $(this).find(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
        $(this).addClass("show");
    }
    else{
        $("input[name=password]").attr("type","password");
        $(this).find(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
        $(this).removeClass("show");
    }
});
</script>
@endsection