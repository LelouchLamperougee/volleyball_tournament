<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\Team;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {

        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {

        $teams = Team::all();

        return view('students.create', compact('teams'));
    }

    public function store(StudentRequest $request)
    {

        $data = $request->validated();

        Student::create($data);

        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {

        return view('students.show', compact('student'));

    }

    public function edit(Student $student)
    {
        $teams = Team::all();
        return view('students.edit', compact('student', 'teams'));
    }

    public function update(StudentRequest $request,Student $student)
    {
        $data = $request->validated();
        $student->update($data);
        return redirect()->route('students.index');
    }

    public function destroy(Student $student){

        $student->delete();
        return redirect()->route('students.index');
    }
}
