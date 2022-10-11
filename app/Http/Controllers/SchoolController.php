<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Team;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){

        $schools = School::all();

        return view('schools.index', compact('schools'));
    }

    public function create(){
        return view('schools.create');
    }

    public function store(){

        $data = request()->validate([
            'school_name' => 'string',
        ]);

        School::create($data);

        return redirect()->route('schools.index');
    }

    public function show(School $school){

        return view('schools.show', compact('school'));
    }

    public function edit(School $school){
        return view('schools.edit', compact('school'));
    }

    public function update(School $school){

        $data = request()->validate([
            'school_name' => 'string',
        ]);

        $school->update($data);

        return redirect()->route('schools.index');
    }

    public function destroy(School $school){

        $school->delete();

        return redirect()->route('schools.index');
    }
}
