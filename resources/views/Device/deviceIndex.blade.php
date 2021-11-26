<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sm text-md text-lg text-gray-800 leading-tight">
            {{ __('Devices') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-primary" href={{ route("Device.create") }}>Add Device</a>
            <br>
            <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>LOCATION</th>
                            <th>BATTERY</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $device)
                            <tr>
                                <td>{{ $device->id }}</td>
                                <td>{{ $device->Nombre }}</td>
                                <td>{{ $device->Ubicacion }}</td>
                                <td>{{ $device->Bateria }}</td>
                                <td><a href="{{ route("Device.show", $device->id) }}">Show</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
