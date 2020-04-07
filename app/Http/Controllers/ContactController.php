<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store(){
        $contact = new Contact();
        $contact -> name = request('name');
        $contact -> email = request('email');
        $contact -> subject = request('subject');
        $contact -> message = request('message');
        $contact ->save();
        return redirect()->route('contact');
    }
}
