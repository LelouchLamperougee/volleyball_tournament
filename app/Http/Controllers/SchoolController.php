<?php

namespace App\Http\Controllers;

use App\Models\School;
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
}
