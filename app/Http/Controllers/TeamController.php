<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){

        $teams = Team::all();

        return view('teams.index', compact('teams'));
    }

    public function create(){

        $schools = School::all();

        return view('teams.create', compact('schools'));
    }

    public function store(){

        $data = request()->validate([
            'team_name' => '',
            'school_id' => '',
        ]);

        Team::create($data);

        return redirect()->route('teams.index');
    }

    public function show(Team $team){

        return view('teams.show', compact('team'));
    }

    public function showMembers(Team $team){

        $members = Student::all()->where('team_id', $team->id);

        return view('teams.members', compact('members'));
    }

    public function edit(Team $team){

        $schools = School::all();

        return view('teams.edit', compact('team', 'schools'));
    }

    public function update(Team $team){

        $data = request()->validate([
            'team_name' => '',
            'school_id' => '',
        ]);

        $team->update($data);

        return redirect()->route('teams.index');
    }

    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('teams.index');
    }
}
