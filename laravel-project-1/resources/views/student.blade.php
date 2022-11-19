@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content')
    <h1>Student List</h1>
    <div class="my-3 ms-1">
        <a href="students-add" class="btn btn-dark">New Student</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIM</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->nim}}</td>
                <td>
                    <a href="student/{{$item->id}}">detail</a>
                    <a href="students-edit/{{$item->id}}">edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection