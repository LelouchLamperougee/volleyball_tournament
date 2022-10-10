@extends('layouts.main')
@vite('resources/css/create.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                Add a team
            </div>

            <form method="POST" action="{{route('teams.store')}}">
                @csrf
                <div class="input-section">
                    <div class="inputs">
                        <div>
                            <label for="team_name">Enter team name:<br></label>
                            <input type="text" name="team_name" placeholder="team">
                        </div>

                        <div>
                            <label for="school_id">Choose a school: <br></label>
                            <select name="school_id">
                                @foreach($schools as $school)
                                    <option value="{{$school->id}}">
                                        {{$school->school_name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="button-section">
                        <button class="button" type="submit"><a>Add</a></button>
                        <button class="button"><a href="{{route('teams.index')}}">Back</a> </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
