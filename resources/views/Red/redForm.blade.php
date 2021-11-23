<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Network') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Red.index") }}>Return</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route("Red.store") }}" method="POST">
                    @csrf
                    <label for="SSID">Enter the name of the Network:</label>
                    <input type="text" name="SSID" required>
                    <br>
                    <label for="Contraseña">Password</label>
                    <input type="password" name="Contraseña">

                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
