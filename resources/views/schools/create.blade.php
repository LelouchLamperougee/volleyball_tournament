@extends('layouts.main')
@vite('resources/css/create.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                School Registration
            </div>

            <form method="POST" action="{{route('schools.store')}}">
                @csrf
                <div class="input-section">

                    <div>
                        <label for="school_name">Enter school name:<br></label>
                        <input
                            value="{{old('school_name')}}"
                            type="text" name="school_name" placeholder="school">

                        @error('school_name')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="button-section">
                        <button class="button" type="submit"><a>Register</a></button>
                        <button class="button"><a href="{{route('schools.index')}}">Back</a> </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
