@extends('layouts.main')
@vite('resources/css/show.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                {{$school->school_name}}
            </div>

            <div class="list">
                <table class="table">
                    <tr>
                        <td>id</td>
                        <th>{{$school->id}}</th>
                    </tr>
                    <tr>
                        <td>name</td>
                        <th>{{$school->school_name}}</th>
                    </tr>
                    <tr>
                        <td>registration date</td>
                        <th>{{$school->created_at}}</th>
                    </tr>
                </table>
            </div>

            <div class="button-section">

                <button class="button"><a href="{{route('schools.index')}}">Back</a></button>
            </div>
        </div>
    </div>
@endsection
