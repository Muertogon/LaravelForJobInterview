@extends('layouts.app')
@section('content')
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
        
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @endguest
    @auth
        <div class="container-lg">
            <a href="/page1"> GO TO SURVEY</a>    
        </div>
    @endauth
@endsection