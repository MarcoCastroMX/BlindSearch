<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Information of ' . $device->Nombre ) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Device.index") }}>Return</a>
            @if ($device->Foto != "" )
            @php
                $nombre_archivo = explode("/",$device->Foto_Ruta)
            @endphp
            <img src="{{ asset("storage/imagenes/".$nombre_archivo[2])}}" width="300px" alt="Foto"/>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul>
                    <li>ID: {{ $device ->id }}</li>
                    <li>USER ID: {{ $device ->user_id }}</li>
                    <li>NAME: {{ $device ->Nombre }}</li>
                    <li>LOCATION: {{ $device ->Ubicacion }}</li>
                    <li>BATTERY: {{ $device ->Bateria }}</li>
                </ul>
            </div>
            <form action="{{ route("Device.destroy", $device) }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Delete">
            </form>
            <a href="{{ route("Device.edit",$device->id) }}">Edit</a>
        </div>
    </div>
</x-app-layout>
