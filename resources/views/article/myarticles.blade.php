@extends('layouts.app')
@section('content')
    
<div class="w-full h-16 grid place-items-center grid-cols-1 bg-gray-900">
    <div class="pt-1 pb-1">
        <form action="/my-articles/">
            <input class="bg-purple-100 block  border-2 text-indigo-900  h-10 w-60 text-m outline-none p-3 mt-2" type="search"
                placeholder=" Search..."
                name="searchBy">
            <button type="submit">
                <i class="fa fa-search"
                    style="font-size: 18px;">
                </i>
            </button>
        </form>
    </div>
   
</div>

  

{{-- <div class="w-4/5 m-auto text-center">
    <div class="py-20 border-b">
        <h1 class="text-3xl text-gray-400">
             My Articles 
        </h1>
    </div>
</div> --}}

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pt-2">
        <p class="w-1/6 mb-4 text-purple-100 bg-purple-800 rounded py-4" >
            {{session()->get('message')}}
        </p>
    </div>
    
@endif
@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a href="/my-articles/create" class="bg-indigo-900 uppercase bg-transparent text-purple-100
         text-xs font-bold py-3 px-5 rounded-3xl">
        Create Article
        </a>
   
   
    </div>

    @foreach ($articles as $article)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5
    mx-auto py-15 border-b-2 border-purple-300">
    <div>
        <img src="{{ asset('images/' . $article->image_path) }}" width="400"alt="">
    </div>
    
    <div>
        <h2 class="text-indigo-900 font-bold text-3xl pb-4">
            {{$article->title}}
        </h2>
        <span class="text-purple-400">
               By <span class="font-bold italic text-purple-700">{{$article->user->name}}</span>, created on {{ date('jS M Y',strtotime($article->updated_at))}}
        </span>
    
        <p class="text-justify text-l text-purple-400 pt-8 pb-10 leading-8 font-light">
           {{$article->description}}
        </p>
    
        <a href="/my-articles/{{$article->slug}}" class="uppercase bg-indigo-900  text-purple-100 text-l font-bold py-2 px-7 rounded-3xl">
           Keep Reading
       </a>
       @if (isset(Auth::user()->id) && Auth::user()->id==$article->user_id)
            
        <span class="float-right">

            <a href="/my-articles/{{$article->slug}}/edit"
                class="text-indigo-600 italic hover:text-indigo-900 pb-1 border-b-2 border-indigo-600 hover:border-indigo-900"
                >
                Edit
            </a>
        </span>

        <span class="float-right">
            <form action="/my-articles/{{$article->slug}}"
                
                method="POST">
            @csrf
            @method('delete')

            <button class="text-red-600 hover:text-red-900 italic pr-3  "
            type="submit">
                Delete
            </button>
            </form>
        </span>
        @endif
       
    </div>
    
    </div>
    @endforeach

@else{
    <div class="pt-5 w-3/5 text-center rounded-3xlw-4/5 m-auto">
        <a href="/login" class=" text-indigo-900
         text-3xl italic uppercase py-3 px-5 rounded-3xl underline">
         You are not logged, please login to create and manage your articles.

        </a>
        
        
   
    </div>
}@endif



@endsection