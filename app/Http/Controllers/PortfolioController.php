<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function show(){
        $portfolios = Portfolio::all();
        return view('back_pages.portfolio', compact('portfolios'));
    }

        // delete
        public function destroy($id){
            Portfolio::find($id)->delete();
            return redirect()->back();
        }
        
        // edit
        public function edit($id){
            $portfolio = Portfolio::find($id);
            return view("edit.portfolio", compact('portfolio'));
        }
        public function update($id){
            $portfolio = Portfolio::find($id);
            $portfolio -> titre = request('titre');
            $portfolio -> span = request('span');
            $portfolio -> style_img = request('style_img');
            $portfolio->save();
            return redirect()->route('portfolio');
        }   
        
        // create
        public function create(){
            return view('create.portfolio');
        }
        public function store(){
            $portfolio = new Portfolio();
            $portfolio -> titre = request('titre');
            $portfolio -> span = request('span');
            $portfolio -> style_img = request('style_img');
            $portfolio->save();
            return redirect()->route('portfolio');
        }


}
