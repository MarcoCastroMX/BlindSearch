<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Networks') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-primary" href={{ route("Red.create") }}>Add Network</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="width:320px; height:80px; overflow:auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>SSID</th>
                                <th>PASSWORD</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($redes as $red)
                                <tr>
                                    <td>{{ $red->id }}</td>
                                    <td>{{ $red->SSID }}</td>
                                    <td>{{ $red->Contraseña }}</td>
                                    <td><a href="{{ route("Red.show",$red) }}">Show</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="{{ route("relation") }}">Your Networks</a>
            </div>
        </div>
    </div>
</x-app-layout>
