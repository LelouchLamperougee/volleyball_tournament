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
                        <th colspan="3">operations</th>
                    </tr>

                    @foreach($schools as $school)
                        <tr>
                            <td>{{$school->id}}</td>
                            <td>{{$school->school_name}}</td>
                            <td><button class="see_more"><a class="a_text" href="{{route('schools.show', $school->id)}}">view</a></button></td>
                            <td><button class="edit"><a class="a_text" href="{{route('schools.edit', $school->id)}}">edit</a></button></td>
                            <td>
                                <form method="POST" action="{{route('schools.destroy', $school->id)}}">
                                    @method('delete')
                                    @csrf
                                    <button class="delete" type="submit"><a class="a_text">delete</a></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="paginate">
                {{$schools->links()}}
            </div>

            <div class="button-section">
                <button class="button"><a href="{{route('schools.create')}}">Register a new school</a></button>
                <button class="button"><a href="{{route('homepage.homepage')}}">Back</a></button>
            </div>
        </div>
    </div>
@endsection
