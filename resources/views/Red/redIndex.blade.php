<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sm text-md text-lg text-gray-800 leading-tight">
            {{ __('Networks') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-primary" href={{ route("Red.create") }}>Add Network</a>
            <br>
            <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SSID</th>
                            <th>PASSWORD</th>
                            <th>ACTION</th>
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
                <br>
                <div class="col-md-offset-3 col-md-6 text-center">
                    <a class="btn btn-primary" href="{{ route("Red_relation") }}">Your Networks</a>
                    <a href="{{ route("download") }}"class="btn btn-info">Download PDF</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
