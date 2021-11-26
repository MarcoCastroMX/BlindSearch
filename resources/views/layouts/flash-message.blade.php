@if ($message = Session::get('Red_add'))
<div class="alert alert-success alert-block">
    <a href="{{ route("Red.index") }}">x</a>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('Device_add'))
<div class="alert alert-success alert-block">
    <a href="{{ route("Device.index") }}">x</a>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('Red_message'))
@php
    $red = Session::get('red')
@endphp
<div class="alert alert-warning alert-block">
    <a href="{{ route("Red.show",$red) }}">x</a>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('Device_message'))
@php
    $device = Session::get('device')
@endphp
<div class="alert alert-warning alert-block">
    <a href="{{ route("Device.show",$device) }}">x</a>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('Red_delete'))
<div class="alert alert-danger alert-block">
    <a href="{{ route("Red.index") }}">x</a>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('Device_delete'))
<div class="alert alert-danger alert-block">
    <a href="{{ route("Device.index") }}">x</a>
    <strong>{{ $message }}</strong>
</div>
@endif
