<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent()
    {
        return view('add-student');
    }

    public function storeStudent(Request $request)
    {
        $name = $request -> name;
        $image = $request -> file('file');
        $imageName = time().'.'.$image->extension();
        $image -> move(public_path('images'),$imageName);

        $student = new Student();
        $student -> name = $name;
        $student -> profileimage = $imageName;
        $student -> save();
        return back()->with('student_added', 'Student data has been added');
    }

    public function students()
    {
        $students = student::all();
        return view('all-students', compact('students'));
    }

    public function editStudent($id)
    {
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    public function updateStudent(Request $request) 
    {
        $name = $request -> name;
        $image = $request -> file('file');
        $imageName = time().'.'.$image->extension();
        $image -> move(public_path('images'),$imageName);

        $student = Student::find($request->id);
        $student -> name = $name;
        $student -> profileimage = $imageName;
        $student -> save();

        return back()->with('student_updated', 'Student has been updated');
    }

}
