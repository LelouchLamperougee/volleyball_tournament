@extends('layouts.main')
@vite('resources/css/show.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                {{$team->team_name}}
            </div>

            <div class="list">
                <table class="table">
                    <tr>
                        <td>id</td>
                        <th>{{$team->id}}</th>
                    </tr>
                    <tr>
                        <td>name</td>
                        <th>{{$team->team_name}}</th>
                    </tr>
                    <tr>
                        <td>school</td>
                        <th>{{$team->school->school_name}}</th>
                    </tr>
                    <tr>
                        <td>registration date</td>
                        <th>{{$team->created_at}}</th>
                    </tr>
                </table>
            </div>

            <div class="button-section">

                <button class="button"><a href="{{route('teams.show.members', $team->id)}}">Team members</a></button>
                <button class="button"><a href="{{route('teams.index')}}">Back</a></button>

            </div>
        </div>
    </div>
@endsection
