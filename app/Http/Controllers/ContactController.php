<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{   

    public function show(){
        $contacts = Contact::all();
        return view('back_pages.contact', compact('contacts'));
    }
        // delete
    public function destroy($id){
        Contact::find($id)->delete();
        return redirect()->back();
    }

        // Store
    public function store(){
        $contact = new Contact();
        $contact -> name = request('name');
        $contact -> email = request('email');
        $contact -> subject = request('subject');
        $contact -> message = request('message');
        request()->validate([
            'name'=>['required'],
            'email'=>['required', 'email'],
            'message'=>['required'],
            'subject'=>['required'],
        ]);
        $contact ->save();
        return Redirect::to(URL::previous() . "#contact");
    }
}
