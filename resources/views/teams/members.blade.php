@extends('layouts.main')
@vite('resources/css/show.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                Team members
            </div>

            @foreach($members as $member)
            <div class="list">
                <table class="table">

                    <tr>
                        <th>student id</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>age</th>
                        <th>team</th>
                        <th>date registration</th>
                        <th colspan="3">operations</th>
                    </tr>

                        <tr>
                            <td>{{$member->id}}</td>
                            <td>{{$member->first_name}}</td>
                            <td>{{$member->last_name}}</td>
                            <td>{{$member->age}}</td>
                            <td>{{$member->team->team_name}}</td>
                            <td>{{$member->created_at}}</td>
                            <td ><button class="see_more"><a class="a_text" href="{{route('students.show', $member->id)}}">view</a></button></td>
                            <td><button class="edit">edit</button></td>
                            <td><button class="delete">delete</button></td>
                        </tr>
                </table>
            </div>
            @endforeach

            <div class="button-section">

                <button class="button"><a href="{{route('teams.index')}}">Back</a></button>
            </div>
        </div>
    </div>
@endsection
