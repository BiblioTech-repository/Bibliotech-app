<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header  class="bg-indigo-900 py-6">
            <div class=" container mx-auto flex justify-between items-center px-6">
                <div>
                    <img src=" {{ asset('images/biblio-logo.png') }}" alt="" width="50" class='inline-block'height="45">
                    <a href="{{ url('/') }}" class="text-xl font-semibold text-purple-100 no-underline">
                        {{-- {{ config('app.name', 'Laravel') }} --}} BiblioTech
                    </a>
                </div>


            
                <nav class=" space-x-5 text-purple-200 text-sm sm:text-base">
                  
                   {{-- <div class="relative text-indigo-900 inline-block rounded bg-purple-200 p-1  "> --}}
{{--                    

                 @if (\Request::is('articles'))
                 <div class="relative text-indigo-900 inline-block rounded bg-purple-200 p-1  ">
                      <form action="/articles" method="GET">
                        
                        <svg class="h-5 w-5 absolute ml-1 left-0 "xmlns="http://www.w3.org/2000/svg" class="h-6 w-16" fill="none" viewBox="0 0 24 24" stroke="#33105C">
                            <path stroke-linecap="none" stroke-linejoin="none" stroke-width="3" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                          </svg>
                          
                        <input type="search" name="searchBy" placeholder="Search...."class="ml-6 bg-purple-200">
                       
                      
                      </form>
                    </div>
                 @else
                 @if (\Request::is('my-articles') && isset(Auth::user()->id) && Auth::user()->id==$article->user_id )
                 <div class="relative text-indigo-900 inline-block rounded bg-purple-200 p-1  ">
                      <form action="/articles" method="GET">
                        
                        <svg class="h-5 w-5 absolute ml-1 left-0 "xmlns="http://www.w3.org/2000/svg" class="h-6 w-16" fill="none" viewBox="0 0 24 24" stroke="#33105C">
                            <path stroke-linecap="none" stroke-linejoin="none" stroke-width="3" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                          </svg>
                          
                        <input type="search" name="searchBy" placeholder="Search...."class="ml-6 bg-purple-200">
                       
                      
                      </form>
                    </div>
                 @else
                --}}
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/articles">Articles</a>
                    @if (Auth::check())
                    <a class="no-underline hover:underline" href="/my-articles"> My Articles</a>
                    @endif
                    
                    <a class="no-underline hover:underline" href="/contactUs">Contact Us</a>
                    @guest
                       <a class="no-underline hover:underline" href="{{route('login')}}">{{_('Login')}}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        <div>
            
            @yield('content')

        </div>
        <div>
            @include('layouts.footer')
        </div>
      
    </div>
</body>
</html>
