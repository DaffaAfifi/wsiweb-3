@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content')
    <h1>Student List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIM</th>
                <th>Class</th>
                <th>Exstracurricular</th>
                <th>Homeroom Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($StudentList as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->nim}}</td>
                <td>{{$item->class['name']}}</td>
                <td>
                    @foreach ($item->extracurriculars as $data)
                        {{$data['name']}} <br>
                    @endforeach
                </td>
                <td>{{$item->class->teachers['name']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection