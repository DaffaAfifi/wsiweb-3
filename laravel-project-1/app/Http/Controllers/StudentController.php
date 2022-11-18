<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        // join nested 3 tabel
        // $student = Student::with(['class.teachers', 'extracurriculars'])->get();
        $student = Student::get();
        return view('student', ['studentList' => $student]);
    }

    public function show($id){
        $student = Student::with(['class.teachers', 'extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }
}
