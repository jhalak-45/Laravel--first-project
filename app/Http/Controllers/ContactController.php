<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('contact');
    }
    public function send(Request $request)
    {
        $this->validate(
            $request,[
                'name'=>'required',
                'email'=>'required|email',
                'contact'=>'required',
                'address'=>'required',
                'subject'=>'required',
                'message'=>'required'
            ]
        );

        Contact::create($request->all());
        return back()->with('success','I have recieved your Message, I will response after few minutes.');
    }
}
