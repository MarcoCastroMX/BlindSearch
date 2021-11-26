<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($device) ? __('Edit Device') : __('Add Device') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Device.index") }}>Return</a>
            <br>
            <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (isset($device))
                    <form action="{{ route("Device.update",$device->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PATCH")
                @else
                    <form action="{{ route("Device.store") }}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    @if (isset($device))
                        @if ($device->Foto != "" )
                        @php
                            $nombre_archivo = explode("/",$device->Foto_Ruta)
                        @endphp
                        <img src="{{ asset("storage/imagenes/".$nombre_archivo[2])}}" class="img-fluid w-25 mx-auto d-block" alt="Foto"/>
                        @endif
                    @endif
                    <div class="form-group">
                        <label for="Nombre">Name:</label>
                        <input type="text" name="Nombre" class="form-control" required value="{{ $device->Nombre ?? "" }}">
                        @error('Nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="Ubicacion">Location:</label>
                        <input type="text" name="Ubicacion" class="form-control" required value="{{ $device->Ubicacion ?? "" }}">
                        @error('Ubicacion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="form-group">
                        <label for="Bateria">Battery:</label>
                        <input type="number" name="Bateria" class="form-control" required min="0" max="100" value="{{ $device->Bateria ?? "0" }}">
                        @error('Bateria')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <br>
                        <input type="file" class="custom-file-input" id="customFile" name="Foto">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Send">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
