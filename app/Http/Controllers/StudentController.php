<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Team;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create(){

        $teams = Team::all();

        return view('students.create', compact('teams'));
    }

    public function store(){

        $data = request()->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'age' => 'integer',
            'team_id' => '',
        ]);

        Student::create($data);

        return redirect()->route('students.index');
    }

    public function show(Student $student){

        return view('students.show', compact('student'));

    }
}
