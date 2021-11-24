<?php

namespace App\Http\Controllers;

use App\Models\Red;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelationController extends Controller
{
    public function showRelation(){
        $redes = Red::all();
        $mis_redes = Auth::user()->reds()->where("user_id",Auth::user()->id)->get();
        return view("relation",compact("redes","mis_redes"));
    }

    public function saveRelation(Request $request){
        $user_id = Auth::user();
        $user_id->reds()->sync($request->red_id);
        return redirect()->route("Red.index");
    }
}
