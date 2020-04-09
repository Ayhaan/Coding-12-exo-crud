<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function show(){
        $testimonials = Testimonial::all();
        return view('back_pages.testimonial', compact('testimonials'));
    }
        // delete
        public function destroy($id){
            Testimonial::find($id)->delete();
            return redirect()->back();
        }
        
        // edit
        public function edit($id){
            $testimonial = Testimonial::find($id);
            return view("edit.testimonial", compact('testimonial'));
        }
        public function update($id){
            $testimonial = Testimonial::find($id);
            $testimonial -> img = request('img');
            $testimonial -> name = request('name');
            $testimonial -> span = request('span');
            $testimonial -> comment = request('comment');
            $testimonial->save();
            return redirect()->route('testimonial');
        }   
        
        // create
        public function create(){
            return view('create.testimonial');
        }
        public function store(){
            $testimonial = new Testimonial();
            $testimonial -> img = request('img');
            $testimonial -> name = request('name');
            $testimonial -> span = request('span');
            $testimonial -> comment = request('comment');
            $testimonial->save();
            return redirect()->route('testimonial');
        }
}
