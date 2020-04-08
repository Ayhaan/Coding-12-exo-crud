<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function show(){
        $teams = Team::all();
        return view('back_pages.team', compact('teams'));
    }

        // delete
        public function destroy($id){
            Team::find($id)->delete();
            return redirect()->back();
        }
        
        // edit
        public function edit($id){
            $team = Team::find($id);
            return view("edit.team", compact('team'));
        }
        public function update($id){
            $team = Team::find($id);
            $team -> img = request('img');
            $team -> name = request('name');
            $team -> span = request('description');
            $team->save();
            return redirect()->route('team');
        }   
        
        // create
        public function create(){
            return view('create.team');
        }
        public function store(){
            $team = new Team();
            $team -> img = request('img');
            $team -> name = request('name');
            $team -> span = request('description');
            $team->save();
            return redirect()->route('team');
        }
}
