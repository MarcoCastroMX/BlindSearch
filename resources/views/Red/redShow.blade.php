<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Information of ' . $red->SSID ) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Red.index") }}>Return</a>
            <br>
            <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul class="list-group">
                    <li class="list-group-item">ID: {{ $red -> id }}</li>
                    <li class="list-group-item">SSID: {{ $red ->SSID }}</li>
                    <li class="list-group-item">PASSWORD: {{ $red ->Contraseña }}</li>
                    <li class="list-group-item">USER CREATOR: {{ $red ->Usuario_Creador }}</li>
                    <li class="list-group-item">EMAIL CREATOR: {{ $red ->Email_Creador }}</li>
                </ul>
            </div>
            <br>
            <form action="{{ route("Red.destroy",$red) }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" class="btn btn-warning" value="Delete">
            </form>
            <br>
            <a href="{{ route("Red.edit",$red) }}"class="btn btn-info">Edit</a>
        </div>
    </div>
</x-app-layout>
