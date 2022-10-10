@extends('layouts.main')
@vite('resources/css/index.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                Student list
            </div>

            <div class="list">

                <table class="table">

                    <tr>
                        <th>student id</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>age</th>
                        <th>team</th>
                        <th colspan="3">operations</th>
                    </tr>

                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->first_name}}</td>
                            <td>{{$student->last_name}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->team->team_name}}</td>
                            <td ><button class="see_more"><a class="a_text" href="{{route('students.show', $student->id)}}">view</a></button></td>
                            <td><button class="edit">edit</button></td>
                            <td><button class="delete">delete</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="button-section">
                <button class="button"><a href="{{route('students.create')}}">Add a tournament participant</a></button>
                <button class="button"><a href="{{route('teams.index')}}">Back</a></button>
            </div>
        </div>
    </div>
@endsection
