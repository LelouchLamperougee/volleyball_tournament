@extends('layouts.main')
@vite('resources/css/index.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                Team list
            </div>

            <div class="list">

                <table class="table">

                    <tr>
                        <th>team id</th>
                        <th>team name</th>
                        <th>school</th>
                        <th colspan="3">operations</th>
                    </tr>


                    @foreach($teams as $team)
                        <tr>
                            <td>{{$team->id}}</td>
                            <td>{{$team->team_name}}</td>
                            <td>{{$team->school->school_name}}</td>
                            <td>
                                <button class="see_more"><a class="a_text" href="{{route('teams.show', $team->id)}}">view</a></button>
                            </td>
                            <td>
                                <button class="edit">edit</button>
                            </td>
                            <td>
                                <button class="delete">delete</button>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>

            <div class="button-section">
                <button class="button"><a href="{{route('teams.create')}}">Register a team</a></button>
                <button class="button"><a href="{{route('students.index')}}">All participants</a></button>
                <button class="button"><a href="{{route('homepage.homepage')}}">Back</a></button>
            </div>
        </div>
    </div>
@endsection
