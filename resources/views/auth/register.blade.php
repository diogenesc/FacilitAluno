@extends('layouts.form')

@section('titulo', (isset($usuario) ? "FacilitAluno | Editar" : " FacilitAluno | Cadastrar"))

@section('form')
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="form-icon">
                <img src="{{asset('assets/img/logo.svg')}}" class="icon icon-user" style="width: 55%; margin-bottom:15%"></img>
            </div>
            <p id="slogan">FacilitAluno</p>
            <div class="form-group">
                <input id="name" type="text" class="form-control item" name="name" value="{{ isset($usuario) ? $usuario->name : old('name')}}" placeholder="Nome" required autocomplete="name" autofocus>
            </div>
            <div class="form-group">
                <input id="email" type="email" class="form-control item" name="email" value="{{ isset($usuario) ? $usuario->email : old('email')}}" placeholder="Email" required autocomplete="email">
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control item" name="password" placeholder="Senha" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control item" name="password_confirmation" placeholder="Confirme a senha" required autocomplete="new-password">
                <div style="text-align: center; color: red" id="error-msg"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Criar conta</button>
            </div>
        </form>
@endsection

@section('scripts')

@endsection