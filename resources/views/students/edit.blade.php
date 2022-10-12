@extends('layouts.main')
@vite('resources/css/create.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                Update Student
            </div>

            <form method="POST" action="{{route('students.update', $student->id)}}">
                @method('PATCH')
                @csrf
                <div class="input-section">
                    <div class="inputs">

                        <div>
                            <label for="first_name">Enter first name:<br></label>
                            <input type="text" name="first_name" value="{{$student->first_name}}" placeholder="first name">

                            @error('first_name')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="last_name">Enter last name:<br></label>
                            <input type="text" name="last_name" value="{{$student->last_name}}" placeholder="last name">

                            @error('last_name')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="age">Enter age:<br></label>
                            <input type="number" name="age" value="{{$student->age}}" placeholder="age">

                            @error('age')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="team_id">Choose a team: <br></label>
                            <select name="team_id">
                                @foreach($teams as $team)
                                    <option value="{{$team->id}}">
                                        {{$team->team_name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="button-section">
                        <button class="button" type="submit"><a>Update</a></button>
                        <button class="button"><a href="{{route('students.index')}}">Back</a> </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
