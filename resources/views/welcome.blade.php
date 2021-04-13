<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FacilitAluno | Boas vindas</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
        <link rel="shortcut icon" href="{{asset('assets/img/logo.svg')}}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="header">
                    <div class="slogan">
                        <img src="{{asset('assets/img/logo.svg')}}" alt="Logo FacilitAluno">
                        <p>FacilitAluno</p>
                    </div>

                    <div class="link-acesso">
                        
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="login">Entrar</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Cadastrar</a>
                            @endif
                        @endauth
                    </div>
                </div>    
            @endif

            

            <div class="container">
                <div class="content">
                    <p class="titulo">Software de Gestão Estudantil</p>
                    <p class="texto">FacilitAluno é uma aplicação web com o objetivo de reunir ferramentas essenciais para o gerenciamento dos seus estudos na Universidade Federal do Espírito Santo, tais como:</p>
                    <ul class="texto">
                        <li>Fluxograma de disciplinas do curso</li>
                        <li>Organizador de tarefas</li>
                        <li>Bloco de anotações</li>
                        <li>Armazenamento em cloud</li>
                        <li>Metas do usuário</li>
                    </ul>
                </div>

                <img src="{{asset('assets/img/girl-book.svg')}}" alt="Imagem garota com livro">
            </div>
        </div>
    </body>
</html>
