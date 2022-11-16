@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
<h1>This is home of Laravel</h1>
<h2>Welcome to Laravel, {{$role}} {{$name}}</h2>

@if ($role == 'admin')
    <a href="#">Ke halaman admin</a>
@else
    <a href="#">Ke halaman staff</a>
@endif

<br>

@switch($role)
    @case($role == 'admin')
        <a href="#">Ke halaman admin</a>
        @break
    @case($role == 'staff')
        <a href="#">Ke halaman staff</a>
        @break
    @default
        <a href="#">Keluar</a>
@endswitch

<br>

<table class="table">
    <tr>
        <th>No.</th>
        <th>Name</th>
    </tr>
    @foreach ($cewe as $data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data}}</td>
    </tr>
    @endforeach
</table>
@endsection