@extends('layouts.mainlayout')

@section('title', 'Students-Detail')

@section('content')
    <h2>Detail Siswa {{$student->name}}</h2>
    <table class="table table-bordered">
        <tr>
            <th>NIM</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Homeroom Teacher</th>
            <th>Extracurricular</th>
        </tr>
        <tr>
            <td>{{$student->nim}}</td>
            <td>
                @if ($student->gender == "P")
                    Perempuan
                @else
                    Laki-Laki
                @endif
            </td>
            <td>{{$student->class['name']}}</td>
            <td>{{$student->class->teachers['name']}}</td>
            <td>
                @foreach ($student->extracurriculars as $item)
                    {{$item['name']}} <br>
                @endforeach
            </td>
        </tr>
    </table>
@endsection