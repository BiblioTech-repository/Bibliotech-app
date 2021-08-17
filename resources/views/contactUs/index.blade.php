@extends('layouts.app')
@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-20 border-b">
        <h1 class="text-3xl text-gray-700">
            We accept every suggest
        </h1>
    </div>
</div> 

    <style>
        h1{
            color: rgb(0, 0, 0);
        }
        label{
            color: black;
        }
    </style>

    <form   class="w-full m-10 px-6 space-y-6 sm:px-10 sm:space-y-8" class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" action="{{route('contactUs.store')}}" method="POST" >
        @csrf

        <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
           Name:
            <br>
            <input class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 pt-2" type="text" name="name">
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            Email:
            <br>
            <input type="text" name="email" class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 text-indigo-900 pt-2">
        </label>
        <br>

        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            Message:
            <br>
            <textarea name="message" rows="4" class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 text-indigo-900 pt-3"></textarea>
        </label>
        <br>

        @error('message')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit" class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-indigo-900 hover:bg-blue-900 sm:py-4">Enviar mensaje</button>
    </form>
    
    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

@endsection