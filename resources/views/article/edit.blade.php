@extends('layouts.app')
@section('content')
    

<div class="w-4/5 m-auto text-center">
    <div class="py-12 border-b">
        <h1 class="text-3xl text-gray-400">
             Update Article
        </h1>
    </div>
</div>


@if ($errors->any())

<div class="w-4/5 m-auto">
    <ul>
        @foreach ($errors as $error)
            <li class="w-1/5 mb-4 text-purple-100 bg-red-700 rounded-2xl">
                {{$error}}
            </li>
        @endforeach
    </ul>
</div>
    
@endif
<div class="w-4/5 m-auto pt-20 justify-items-center ">
    <form action="/my-articles/{{$article->slug}}"
    enctype="multipart/form-data"
    method="POST" class="">
    @csrf
    @method('PUT')
        <input type="text" name="title" value="{{$article->title}}"
        class="bg-purple-100 block border-b-4 border-r-4 border-purple-400 text-indigo-900 w-full h-20 text-4xl outline-none p-3 mb-10"
        >

        <textarea 
        name="description" placeholder="Description..."
         
         class="py-2 px-2 bg-purple-100 block border-b-4 border-r-4 text-indigo-900 border-purple-400 w-full h-10 text-l outline-none mb-5"
         >
         {{$article->description}}"
        </textarea>
    <textarea 
    name="content" placeholder="Content..."
     
     class="py-2 px-2 bg-purple-100 block border-b-4 border-r-4 text-indigo-900 border-purple-400 w-full h-20 text-l outline-none"
     >

     {{$article->content}}"
    </textarea>

    <div class="grid grid-cols-2 justify-items-center gap-0">
    <div class="bg-gray-lighter pt-5 ">
        <label class="w-40 flex flex-col items-center px-3 py-1 bg-indigo-900 rounded 
        shadow-lg tracking-wide uppercase  border-blue cursor-pointer border-b-4 border-r-4 border-purple-400">
       
         <span class="mt-1 inline-block leading-normal text-xs text-indigo-100 font-bold py-1 ">
          Upload image  <svg class="inline-block" fill="#FFF" height="20" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
        </svg>

        </span>
        <input type="file"
            name="image"
            class="hidden">
    </label>

    </div>
    <div class="bg-gray-lighter pt-5 ">
        <label class="w-40 flex flex-col items-center px-3 py-1 bg-indigo-900 rounded 
        shadow-lg tracking-wide uppercase  border-blue cursor-pointer border-b-4 border-r-4 border-purple-400">
    
         <span class="mt-1  leading-normal text-xs text-indigo-100 font-bold py-1 ">
             Upload file <svg class="inline-block" fill="#FFF" height="20" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
            </svg>

        </span>
        <input type="file"
            name="file"
            class="hidden">
    </label>

    </div>
    </div>

    <button type="submit"class="uppercase mt-15 bg-purple-200 text-indigo-900 text-lg font-bold py-4 px-8  border-b-4 border-r-4 border-purple-900 rounded">
        Submit
    </button>
    
</form>
</div>

@endsection