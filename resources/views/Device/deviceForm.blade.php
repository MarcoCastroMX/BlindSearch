<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($device) ? __('Edit Device') : __('Add Device') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Device.index") }}>Return</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (isset($device))
                    <form action="{{ route("Device.update",$device->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PATCH")
                @else
                    <form action="{{ route("Device.store") }}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <label for="Nombre">Name:</label>
                    <input type="text" name="Nombre" required value="{{ $device->Nombre ?? "" }}">
                    <br>
                    <label for="Ubicacion">Location:</label>
                    <input type="text" name="Ubicacion" required value="{{ $device->Ubicacion ?? "" }}">
                    <br>
                    <label for="Bateria">Battery:</label>
                    <input type="number" name="Bateria" required min="10" max="100" value="{{ $device->Bateria ?? "0" }}">
                    <br>
                    @if (isset($device))
                        @if ($device->Foto != "" )
                        @php
                            $nombre_archivo = explode("/",$device->Foto_Ruta)
                        @endphp
                        <img src="{{ asset("storage/imagenes/".$nombre_archivo[2])}}" width="300px" alt="Foto"/>
                        @endif
                    @endif
                    <br>
                    <input type="file" name="Foto">
                    <br>
                    <input type="submit" value="Send">
                </form>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
