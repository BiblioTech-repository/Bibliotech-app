@extends('layouts.app')
@section('content')
    

<div class="w-4/5 m-auto text-center">
    <div class="py-12 border-b">
        <h1 class="text-6xl text-indigo-900 hover:text-purple-700">
            {{$article->title}}
        </h1>
    </div>
</div>

    

<div class="w-4/5 m-auto pt-10 justify-items-center  items-center justify-center">
    
    <div class="flex items-center justify-center align-middle">
        <img class="justify-center items-center pb-10 "  width="600"src="{{ asset('images/' . $article->image_path) }}" alt="">
    </div>
   <span class="text-purple-400">

    By <span class="font-bold  text-justifyzitalic text-purple-700">{{$article->user->name}}</span>, created on {{ date('jS M Y',strtotime($article->updated_at))}}
   </span>

   <div class="text-s text-justify text-indigo-700 pt-8 pb-10 leading-8 font-normal">

    {{$article->description}}
   </div>
   <div class="text-s text-justify text-indigo-700 pt-8 pb-10 leading-8 font-normal">

    {{$article->content}}
   </div>

   
   <div>
    <button type="submit" class="bg-indigo-900 hover:bg-grey text-purple-100 font-bold py-2 px-4 rounded inline-flex items-center">
        <a class=" pr-3 border-r-2 mr-3" href="{{url('/downloads',$article->doc_path)}}">
            {{$article->doc_path}}
        </a> 
        <svg class=" fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
       
        <span class="">Download</span>
      </button>
   </div>
  

</div>

</div>

@endsection