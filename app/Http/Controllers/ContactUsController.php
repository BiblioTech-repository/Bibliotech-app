<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){
        return view('contactUs.index');
    }

    public function store(request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $email=new ContactUsMailable($request->all());
 
        Mail::to('kevincampa01@gmail.com')->send($email);
        return redirect()->route('contactUs.index')->with('info','Mensaje enviado');
    }
}
