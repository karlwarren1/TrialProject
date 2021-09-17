<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{asset('assets/images/AnimeLogo.png')}}" type="image/x-icon">
  <meta name="description" content="Top neon supplier in the Philippines. No Boring signs, just Lit! Ships nationally and internationally. Let us make that boring wall alive!">
  
  <title>Anime Academy</title>
  <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/animatecss/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
  <link rel="preload" as="style" href="{{asset('assets/mobirise/css/mbr-additional.css')}}"><link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                         <img src="{{asset('assets/images/AnimeLogo.png')}}" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{route('blog')}}">Blogs</a>
                </li>
                @if (Route::has('login'))
                 
                      @auth
                          <li class="nav-item"><a class="nav-link link text-white display-4" href="{{ route('profile', Auth::user()->id ) }}">{{ Auth::user()->name }}</a></li>
                          <li class="nav-item"><a class="nav-link link text-white display-4" href="{{ url('/dashboard') }}" >
                            <form style="    margin-top: -44px;" method="POST" action="{{ route('logout') }}">
                                  @csrf

                                  <x-jet-dropdown-link class="nav-link link text-white display-4" href="{{ route('logout') }}"
                                                      onclick="event.preventDefault();
                                                                  this.closest('form').submit();">
                                      {{ __('Logout') }}
                                  </x-jet-dropdown-link>
                            </form>
                          </a></li>
                      @else
                          <li class="nav-item"><a class="nav-link link text-white display-4" href="{{ route('login') }}" >Login</a></li>
                           @if (Route::has('register'))
                           <li class="nav-item"><a class="nav-link link text-white display-4" href="{{ route('register') }}" >Register</a></li>
                        @endif
                         
                      @endauth
                 
              @endif  
            </ul>
        </div>
    </nav>
</section>