<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Networks') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-danger" href={{ route("Red.index") }}>Return</a>
            <br>
            <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route("Red_store_relation") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="red_id">Choose your Network</label>
                        <br>
                        <select name="red_id[]" id="red_id" class="form-control" multiple>
                            @foreach ($redes as $red )
                            @php
                                $Encontrado = False;
                            @endphp
                                @foreach ($mis_redes as $mi_red)
                                    @if ($mi_red->id==$red->id)
                                        <option value="{{ $red->id }}" selected>{{ $red->SSID }}</option>
                                        @php
                                            $Encontrado = True;
                                        @endphp
                                        @break
                                    @endif
                                @endforeach
                                @if ($Encontrado == False)
                                    <option value="{{ $red->id }}">{{ $red->SSID }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Send">
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
