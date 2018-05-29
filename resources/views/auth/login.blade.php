@extends('layouts.app')
@include('template.passwordshow')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="password{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="checkbox" class="password--visibleToggle" checked>
                            <div class="password--background"></div>
                            <div class="password--visibleToggle-eye open">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138980/eye-open.png" />
                            </div>
                            <div class="password--visibleToggle-eye close">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138980/eye-close.png" />
                            </div>
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30.221 30.221" style="enable-background:new 0 0 30.221 30.221;" xml:space="preserve" class="password--lock">
                            <g>
                                <path d="M25.534,14.457h-1.529V9.361c0-2.541-0.965-4.871-2.555-6.572C19.864,1.09,17.602-0.006,15.11,0
		                        c-2.494-0.006-4.756,1.09-6.34,2.789C7.179,4.49,6.214,6.82,6.214,9.361v5.096H4.683c-0.629,0-1.145,0.512-1.145,1.145v13.471
		                        c0,0.637,0.516,1.148,1.145,1.148h20.852c0.635,0,1.148-0.512,1.148-1.148V15.602C26.683,14.969,26.169,14.457,25.534,14.457z
		                        M10.436,9.361c0-1.465,0.559-2.766,1.42-3.686c0.867-0.922,2-1.453,3.254-1.453c1.252,0,2.385,0.531,3.25,1.453
		                        c0.865,0.92,1.42,2.221,1.42,3.686v5.096h-9.344V9.361z"/>
                            </g>
                            </svg>
                                <input id="password" type="text" class="password--input" value="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


