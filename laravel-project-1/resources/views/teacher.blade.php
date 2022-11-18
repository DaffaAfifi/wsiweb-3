@extends('layouts.mainlayout')

@section('title', 'Teachers')

@section('content')
    <h1>Teacher List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection