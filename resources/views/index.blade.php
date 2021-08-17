@extends('layouts.app')

@section('content')
    
    <div class="background-image grid grid-cols-1 m-auto" >
        <div class="flex text-purple-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">

                <h1 class="sm:text-white text-5xl
                 uppercase font-bold text-shadow-md pb-14 hover:text-purple-400">
                    Welcome to the BiblioTech community 
                </h1>
             
                <a href="/articles"
                class="text-center  border-2 border-purple-100 rounded hover:border-purple-400 hover:text-purple-400 text-purple-100 py-2 px-4
                 font-bold tex-xl uppercase"
                >
                    Read More...
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-5 w-10/12 mx-auto
     py-15 border-b border-purple-200">
    <img src="https://cdn.pixabay.com/photo/2015/05/31/10/55/man-791049_960_720.jpg" width="500"alt="">
    

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-indigo-900">
            Struggling to find good stuff for your assignments?
        </h2>
        <p class="font-sans text-justify py-8 text-purple-400 text-s">
            Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Suscipit animi nemo maiores tempora 
            .

        </p>
        <p class="font-normal text-justify pb-9 text-indigo-800 text-s">
            Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Suscipit animi nemo maiores tempora 
            odio ab ad voluptatem nisi illo recusandae, voluptatum qui
            dem reprehenderit excepturi autem 
            eos voluptate aperiam vitae accusamus.

        </p>

        <a href="/articles"
        class="uppercase bg-indigo-800 text-purple-100 text-s
        font-bold
         py-2 px-8 rounded">
        
        See More
        </a>

    </div>

   
</div>
<div class="text-center p-15 bg-purple-200 text-black mb-10">

    <h2 class="text-2xl pb-5 text-l">
        We provide you the best content about....
    </h2>
    <span class="font-bold block hover:text-indigo-800 text-3xl py-1">
        Science
    </span>
    <span class="font-bold block hover:text-indigo-800 text-3xl py-1">
        Technology
    </span>
    <span class="font-bold block hover:text-indigo-800 text-3xl py-1">
        Politics
    </span>
    <span class="font-bold block hover:text-indigo-800 text-3xl py-1">
        History
    </span>
    <span class="font-bold block hover:text-indigo-800 text-3xl py-1">
        Lenguage
    </span>

</div>

{{-- <div class="carousel relative shadow-2xl bg-white">
	<div class="carousel-inner relative overflow-hidden w-full">
	  <!--Slide 1-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full bg-transparent text-indigo-900  text-5xl text-center pt-5">Slide 1</div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-indigo-900 hover:text-white rounded-full bg-white hover:bg-purple-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-indigo-900  hover:text-white rounded-full bg-white hover:bg-purple-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		
		<!--Slide 2-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full bg-transparent text-indigo-900  text-5xl text-center pt-5">Slide 2</div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-indigo-900 hover:text-white rounded-full bg-white hover:bg-purple-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-indigo-900  hover:text-white rounded-full bg-white hover:bg-purple-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		
		<!--Slide 3-->
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full  bg-transparent text-indigo-900 text-5xl text-center pt-5">Slide 3</div>
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-indigo-900 hover:text-white rounded-full bg-white hover:bg-purple-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-indigo-900  hover:text-white rounded-full bg-white hover:bg-purple-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!-- Add additional indicators for each slide-->
		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-purple-200 hover:text-purple-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-purple-200 hover:text-purple-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-purple-200 hover:text-purple-700">•</label>
			</li>
		</ol>
		
	</div>
</div> --}}
@endsection