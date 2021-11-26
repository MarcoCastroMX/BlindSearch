<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeviceCreateRequest;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::with('user')->get();
        return view("Device.deviceIndex",compact("devices"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Device.deviceForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeviceCreateRequest $request)
    {
        if($request->hasFile("Foto")){
            $nombre_original = $request->Foto->getClientOriginalName();
            $ruta = $request->Foto->store("public/imagenes");
            $mime = $request->Foto->getClientMimeType();

            $request->merge([
                "Foto" => $nombre_original,
                "Foto_Ruta" => $ruta,
                "MIME" => $mime,
                "user_id" => Auth::id(),
            ]);
        } else {
            $request->merge([
                "user_id" => Auth::id(),
                "Foto" => "",
                "Foto_Ruta" => "",
                "MIME" => "",
            ]);
        }

        $device = Device::create($request->all());
        return redirect()->route('Device.index')
        ->with('Device_add','Device added correctly');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $device = Device::find($id);
        return view('Device.deviceShow')
            ->with('device',$device);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device = Device::find($id);
        return view('Device.deviceForm')
            ->with('device',$device);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(DeviceCreateRequest $request, $id)
    {
        if($request->hasFile("Foto")){
            $nombre_original = $request->Foto->getClientOriginalName();
            $ruta = $request->Foto->store("public/imagenes");
            $mime = $request->Foto->getClientMimeType();

            $request->merge([
                "Foto" => $nombre_original,
                "Foto_Ruta" => $ruta,
                "MIME" => $mime,
                "user_id" => Auth::id(),
            ]);
        } else {
            $request->merge([
                "user_id" => Auth::id(),
                "Foto" => "",
                "Foto_Ruta" => "",
                "MIME" => "",
            ]);
        }

        $device = Device::find($id);

        Device::where("id",$device->id)->update($request->except("_token","_method","user_id"));
        return redirect()->route('Device.show',$device)
        ->with(['Device_message' => "Device edited correctly","device"=>$device]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $device = Device::find($id);
        $device->delete();
        return redirect()->route('Device.index')
        ->with('Device_delete','Device deleted correctly');
    }
}
