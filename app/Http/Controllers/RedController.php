<?php

namespace App\Http\Controllers;

use App\Http\Requests\RedCreateRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Red;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redes = Red::with('users')->get();
        return view("Red.redIndex",compact("redes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Red.redForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RedCreateRequest $request)
    {
        $request->merge([
            "Usuario_Creador" => Auth::user()->name,
            "Email_Creador" => Auth::user()->email,
        ]);

        $red = Red::create($request->all());
        return redirect()->route('Red.index')
        ->with('Red_add','Networkd added correctly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $red = Red::find($id);

        return view('Red.redShow')
            ->with('red',$red);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $red = Red::find($id);
        $this->authorize("autor",$red);
        return view('Red.redForm')
            ->with('red',$red);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RedCreateRequest $request, $id)
    {

        $red = Red::find($id);
        $this->authorize("autor",$red);
        Red::where("id",$red->id)->update($request->except("_token","_method","Usuario_Creador","Email_Creador"));
        return redirect()->route('Red.show',$red)
        ->with(['Red_message' => "Networkd edited correctly","red"=>$red]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $red = Red::find($id);
        $user = Auth::user();
        $this->authorize("autor",$red);
        $user->reds()->detach($red->id);
        $red->delete();
        return redirect()->route('Red.index')
        ->with('Red_delete','Networkd deleted correctly');
    }

    public function download(){
        $redes = Red::with('users')->get();
        $pdf = PDF::loadView("Red.redIndex",compact("redes"))->setOptions(['defaultFont' => 'sans-serif']);

        return  $pdf->download("Network.pdf");
    }
}
