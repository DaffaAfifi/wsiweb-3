<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

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

    public function create(){
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }

    public function store(StudentCreateRequest $request){
        // internal validate
        // $validated = $request->validate([
        //     'nim' => 'unique:students|max:10|required',
        //     'name' => 'max:50|required',
        //     'gender' => 'required',
        //     'class_id' => 'required'
        // ]);

        // eksternal validate on line 29 

        $studentm = new Student;

        // $studentm->name = $request->name;
        // $studentm->gender = $request->gender;
        // $studentm->nim = $request->nim;
        // $studentm->class_id = $request->class_id;
        // $studentm->save();

        //mass asignment
        $studentm->create($request->all());
        if($studentm){
            Session::flash('status','success');
            Session::flash('message', 'add new student success!');
        }
        return redirect('/students');
    }

    public function edit(Request $request, $id){
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->get(['id', 'name']);
        return view('students-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id){
        $student = Student::findOrFail($id);
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nim = $request->nim;
        // $student->class_id = $request->class_id;
        // $student->save();

        $student->update($request->all());
        return redirect('/students');
    }
}
