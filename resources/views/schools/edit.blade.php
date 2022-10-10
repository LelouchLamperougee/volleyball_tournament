@extends('layouts.main')
@vite('resources/css/create.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                School Update
            </div>

            <form method="POST" action="{{route('schools.update', $school->id)}}" >
                @method('PATCH')
                @csrf
                <div class="input-section">

                    <div>
                        <label for="school_name">Enter school name:<br></label>
                        <input type="text" name="school_name" value="{{$school->school_name}}" >
                    </div>

                    <div class="button-section">
                        <button class="button" type="submit"><a>Update</a></button>
                        <button class="button"><a href="{{route('schools.index')}}">Back</a> </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
