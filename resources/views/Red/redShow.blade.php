<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Information of ' . $red->SSID ) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Red.index") }}>Return</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul>
                    <li>ID: {{ $red -> id }}</li>
                    <li>SSID: {{ $red ->SSID }}</li>
                    <li>PASSWORD: {{ $red ->Contraseña }}</li>
                    <li>USER CREATOR: {{ $red ->Usuario_Creador }}</li>
                    <li>EMAIL CREATOR: {{ $red ->Email_Creador }}</li>
                </ul>
            </div>
            <form action="{{ route("Red.destroy",$red) }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Delete">
            </form>
            <a href="{{ route("Red.edit",$red) }}">Edit</a>
        </div>
    </div>
</x-app-layout>
