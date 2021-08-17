<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index']]);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
       
        
        
        $user= request()->user()->id;
        $art_search = $request->get('searchBy');
        if (!empty($art_search)) {
         $articles = Article::where('title','LIKE',"%$art_search%")->where('user_id', $user)->simplePaginate(3);
         return view('article.myarticles')  ->with('articles',$articles);
       
         
    } else {

       
            $user= request()->user()->id;
             $articles=Article::where('user_id',$user)->orderBy('updated_at','DESC')->get();
        
        
             return view('article.myarticles')  ->with('articles',$articles);
       
        
      
    }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([

            'title'=> 'required',
            'description'=> 'required',
            'content'=> 'required',
            'image'=> 'required|mimes:jpg,png,jpeg|max:5048',
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'

        ]);

        $newImageName = uniqid() .'-'. $request->title .'.'. 
        $request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

        $newFileName = uniqid() .'-'. $request->title .'.'. 
        $request->file->extension();
        $request->file->move(public_path('files'),$newFileName);

        
        

        Article::create([
            'title'=> $request->input('title'),
            'slug'=> SlugService::createSlug(Article::class,'slug',$request->title),
            'description'=> $request->input('description'),
            'content'=> $request->input('content'),
            'image_path'=> $newImageName,
            'doc_path'=> $newFileName,
            'user_id'=> auth()->user()->id

        ]);

        return redirect('/my-articles')->with('message','Your new article has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

       return view('article.show')
       ->with('article',Article::where('slug',$slug)->first());


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('article.edit')
        ->with('article',Article::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        Article::where('slug',$slug)
        ->update([
            'title'=> $request->input('title'),
            'slug'=> SlugService::createSlug(Article::class,'slug',$request->title),
            'description'=> $request->input('description'),
            'content'=> $request->input('content'),
            // 'image_path'=> $newImageName,
            // 'doc_path'=> $newFileName,
            'user_id'=> auth()->user()->id
        ]);
        return redirect('/my-articles');
        // return redirect('/my-articles')->with('message','Your article has been updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $article = Article::where('slug',$slug);
        $article-> delete();

        return redirect('/my-articles');
        
    }

    public function getDownload(Request $request,$file){

        return response()->download(public_path('files/'.$file));
     }
}
