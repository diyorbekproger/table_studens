<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students=Student::all();
        return view('students.index', compact('students'));
    }


    public function create()
    {
        return view('students.create');
    }


        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
        ]);






          Student::create($request->all());

        return redirect()->route('student.create')->with('message', 'Студент успешно добавлен');
    }
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));

    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
        ]);

        $student = Student::find($id);
        $student->update($request->all());

        return redirect()->route('student.index')->with('message', 'Студент успешно обновлен');
    }

    public function destroy(Student $student)
    {

        $student->delete();
    }
}


