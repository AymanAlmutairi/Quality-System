@extends('layouts.app')

@section('content')
    <section class="messages services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Sections </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">Section ID</th>
                            <th rowspan="2">Department</th>
                            <th rowspan="2">Program</th>
                            <th rowspan="2">College</th>
                            <th rowspan="2">Methods</th>
                            {{-- <th colspan="2">Instructor</th>
                            <th rowspan="2">Course Name</th>
                            <th rowspan="2">Number of Students</th> --}}
                        </tr>
                        <tr>
                            {{-- <th>Instructor ID</th>
                            <th>Instructor Name</th> --}}
                        </tr>
                        @foreach ($sections as $section)
                            <tr>
                                <th>{{$loop->index +1 }}</th>
                                <td>{{$section->section_id}}</td>
                                <td>{{$section->department}}</td>
                                <td>{{$section->program}}</td>
                                <td>{{$section->college}}</td>
                                {{-- <td><a href="{{ route('methods.grades', $section->id) }}" class="btn">Methods</a></td> --}}
                                <td><a href="{{ route('methods.index', $section->id) }}" class="btn">Methods</a></td>
                                {{-- <td>95</td>
                                <td>Ahmed Mohamed</td>
                                <td>CS</td>
                                <td>95</td> --}}
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
