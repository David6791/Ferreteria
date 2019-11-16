@extends('layouts.app')
@section('content')
<body class="hold-transition login-page">
    <div class="card">
        <div class="login-box">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar sesion</p>
                <form class="" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="input-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">       
                        <input placeholder="Email" autocomplete="off" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
                    
                        <input placeholder="Contraseña" id="password" type="password" class="form-control" name="password" class="form-control">                
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif               
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recordarme
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <input type="submit" class="btn btn-primary btn-block" value="Ingresar">
                        </div>
                    </div>  
                </form>
            </div>
            <div class="card-footer">
                <p class="mb-1">
                    <a href="">Olvide mi contraseña</a>
                </p>
            </div>        
        </div>
    </div>
</body>
@endsection