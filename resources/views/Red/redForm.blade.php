<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($red) ? __('Edit Network') : __('Add Network') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Red.index") }}>Return</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (isset($red))
                    <form action="{{ route("Red.update",$red) }}" method="POST">
                        @method("PATCH")
                @else
                    <form action="{{ route("Red.store") }}" method="POST">
                @endif
                    @csrf
                    <label for="SSID">Name of the Network:</label>
                    <input type="text" name="SSID" required value="{{ $red->SSID ?? "" }}">
                    <br>
                    <label for="Contraseña">Password</label>
                    <input type="password" name="Contraseña" value="{{ $red->Contraseña ?? "" }}">

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
