<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function show(){
        $services = Service::all();
        return view('back_pages.service', compact('services'));
    }

    // delete
    public function destroy($id){
        Service::find($id)->delete();
        return redirect()->back();
    }
    
    // edit
    public function edit($id){
        $service = Service::find($id);
        return view("edit.service", compact('service'));
    }
    public function update($id){
        $service = Service::find($id);
        $service -> logo = request('logo');
        $service -> titre = request('titre');
        $service -> span = request('span');
        $service->save();
        return redirect()->route('service');
    }   
    
    // create
    public function create(){
        return view('create.service');
    }
    public function store(){
        $service = new Service();
        $service -> logo = request('logo');
        $service -> titre = request('titre');
        $service -> span = request('span');
        $service->save();
        return redirect()->route('service');
    }
}
