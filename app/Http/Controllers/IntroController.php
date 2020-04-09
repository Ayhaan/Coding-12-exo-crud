<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intro;


class IntroController extends Controller
{
    public function show(){
        $intros = Intro::all();
        return view('back_pages.intro', compact('intros'));
    }

    // Delete
    public function destroy($id){
        Intro::find($id)->delete();
        return redirect()->back();
    }

    // create
     public function create(){
        return view('create.intro');
    }
    public function store(){
        $intro = new Intro();
        $intro -> img_path = request('img_path');
        $intro->save();
        return redirect()->route('intro');
    }
}
