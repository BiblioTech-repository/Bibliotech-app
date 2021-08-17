@extends('layouts.app')
@section('content')
    
<div class="w-full h-16 grid place-items-center grid-cols-1 bg-gray-900">
    <div class="pt-1 pb-1">
        <form action="/articles/">
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

<div class="w-4/5 m-auto text-center">
    <div class="py-12 border-b">
        <h1 class="text-3xl text-gray-400">
            Articles
        </h1>
    </div>
</div>
{{-- 
@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a href="/articles/create" class="bg-indigo-900 uppercase bg-transparent text-purple-100
         text-xs font-bold py-3 px-5 rounded-3xl">
        Create Article
        </a>
   
   
    </div>
@else{
    <div class="pt-5 w-4/5 m-auto">
        <a href="/login" class=" text-indigo-900
         text-s italic font-bold py-3 px-5 rounded-3xl">
        Dou you want to create an article? Please login.
        </a>
   
   
    </div>
}@endif --}}
@foreach ($articles as $article)
<div class="sm:grid grid-cols-2 gap-20 w-4/5
mx-auto py-15 border-b border-purple-200">
<div>
    <img src="{{ asset('images/' . $article->image_path) }}" width="450"alt="">
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

    <a href="/articles/{{$article->slug}}" class="uppercase bg-indigo-900  text-purple-100 text-l font-bold py-2 px-7 rounded-3xl">
       Keep Reading
   </a>
</div>

</div>
@endforeach


@endsection