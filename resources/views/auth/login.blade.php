@extends('layouts.form')

@section('titulo', (isset($usuario) ? "FacilitAluno | Editar" : " FacilitAluno | Cadastrar"))

@section('form')
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-icon">
                <img src="{{asset('assets/img/logo.svg')}}" class="icon icon-user" style="width: 55%; margin-bottom:15%" />
            </div>
            <p id="slogan">FacilitAluno</p>
            <div class="form-group">
                <input id="email" type="email" class="form-control item" name="email" value="{{ isset($usuario) ? $usuario->email : old('email')}}" placeholder="Email" required autocomplete="email">
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control item" name="password" placeholder="Senha" required autocomplete="new-password">
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Entrar</button>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link btn-senha" href="{{ route('password.request') }}">
                    {{ __('Esqueci minha senha') }}
                </a>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
@endsection


<!--

@section('content')
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




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
