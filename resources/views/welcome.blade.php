@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">Login</h1>
                    <hr>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div style="padding-left: 15px;padding-right: 15px;">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div style="padding-left: 15px;padding-right: 15px;">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div style="padding-left: 15px;padding-right: 15px;">
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block mt-3">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
