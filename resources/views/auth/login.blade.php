@extends('layouts.app')

@section('content')

<body class="h-100">
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Via Libre Travel</h4></a>

                                <form method="POST" action="{{ route('login')}}" class="mt-5 mb-5 login-input">
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('email') ? 'has-erros' : '' }}">
                                        <input type="email" class="form-control" value="{{ old('email')}}" placeholder="Email">
                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? 'has-erros' : '' }}">
                                        <input type="password" class="form-control" placeholder="Password">
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <button class="btn login-form__btn submit w-100" href="{{route('principal')}}" >Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a class="text-primary">Registrarse</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

@endsection
