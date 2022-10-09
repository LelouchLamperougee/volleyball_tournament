@extends('layouts.main')
@vite('resources/css/index.css')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                School list
            </div>

            <div class="list">

                <table class="table">

                    <tr>
                        <th>school id</th>
                        <th>school name</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                    @foreach($schools as $school)
                        <tr>
                            <td>{{$school->id}}</td>
                            <td>{{$school->school_name}}</td>
                            <td><button class="see_more">view</button></td>
                            <td><button class="edit">edit</button></td>
                            <td><button class="delete">delete</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="button-section">

            </div>
        </div>
    </div>
@endsection
