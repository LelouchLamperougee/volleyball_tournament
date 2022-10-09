@extends('layouts.main')
@vite(['resources/js/homepage.js', 'resources/css/homepage.css'])
@section('content')
    <div class="container">
        <div class="content">
            <h1 class="title">Homepage</h1>
            <div class="description-block">
                <button class="button" id="button-description">Description</button>
                <div>
                    <span class="description hidden" id="description">
                    Registration of schools for participation in the annual volleyball tournament <br> Date of the tournament: October 21 - November 25
                    </span>
                </div>

            </div>

            <div class="navigation">
                <p>Is the school already registered for the tournament?</p><hr>
                <div class="button-section">
                    <button class="button"><a href="{{route('teams.index')}}">Yes, registered</a></button>
                    <button class="button"><a href="{{route('schools.index')}}">Register</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
