@extends('layouts.mainlayout')

@section('title', 'Extracurricular')

@section('content')
    <h1>Extracurricular List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Students</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskulList as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>
                    @foreach ($item->students as $data)
                        {{$data['name']}} <br>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection