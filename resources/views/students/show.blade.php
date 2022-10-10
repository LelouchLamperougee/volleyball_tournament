@extends('layouts.main')
@vite('resources/css/show.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                {{$student->first_name}}.{{$student->last_name}}
            </div>

            <div class="list">
                <table class="table">
                    <tr>
                        <td>id</td>
                        <th>{{$student->id}}</th>
                    </tr>
                    <tr>
                        <td>first name</td>
                        <th>{{$student->first_name}}</th>
                    </tr>
                    <tr>
                        <td>last name</td>
                        <th>{{$student->last_name}}</th>
                    </tr>
                    <tr>
                        <td>age</td>
                        <th>{{$student->age}}</th>
                    </tr>
                    <tr>
                        <td>registration date</td>
                        <th>{{$student->created_at}}</th>
                    </tr>
                </table>
            </div>

            <div class="button-section">

                <button class="button"><a href="{{route('students.index')}}">Students</a></button>
                <button class="button"><a href="{{route('teams.index')}}">Teams</a></button>
            </div>
        </div>
    </div>
@endsection
