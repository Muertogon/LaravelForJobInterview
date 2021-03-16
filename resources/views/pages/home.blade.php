@extends('layouts.app')
@section('content')
    @guest
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-6 col-sm-3 ">
                @if (Route::has('login'))
                    <li class="btn btn-outline-dark btn-lg ">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
            </div>
            <div class="w-100"></div>
            <div class="col-6 col-sm-3 p-5">
                @if (Route::has('register'))
                    <li class="btn btn-outline-dark btn-lg">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            </div>
        </div>
    </div>
    @endguest
    @auth
        <div class="container-lg">
            <div class="d-flex justify-content-center">
                <a href="/page1" class="btn btn-outline-dark"> GO TO SURVEY</a>    
            </div>
        </div>
    @endauth
@endsection