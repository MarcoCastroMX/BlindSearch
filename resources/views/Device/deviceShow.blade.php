<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Information of ' . $device->Nombre ) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Device.index") }}>Return</a>
            <br>
            <br>
            @if ($device->Foto != "" )
            @php
                $nombre_archivo = explode("/",$device->Foto_Ruta)
            @endphp
            <img src="{{ asset("storage/imagenes/".$nombre_archivo[2])}}" class="img-fluid w-25 mx-auto d-block" alt="Foto"/>
            @endif
            <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul class="list-group">
                    <li class="list-group-item">ID: {{ $device ->id }}</li>
                    <li class="list-group-item">USER ID: {{ $device ->user_id }}</li>
                    <li class="list-group-item">NAME: {{ $device ->Nombre }}</li>
                    <li class="list-group-item">LOCATION: {{ $device ->Ubicacion }}</li>
                    <li class="list-group-item">BATTERY: {{ $device ->Bateria }}</li>
                </ul>
            </div>
            <br>
            <form action="{{ route("Device.destroy", $device) }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" class="btn btn-warning" value="Delete">
            </form>
            <br>
            <a href="{{ route("Device.edit",$device->id) }}" class="btn btn-info">Edit</a>
        </div>
    </div>
</x-app-layout>
