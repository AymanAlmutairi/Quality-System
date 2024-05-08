@extends('layouts.app')

@section('content')
    <section class="messages services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Student </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">Student ID</th>
                            <th rowspan="2">Name</th>
                            <th rowspan="2">College</th>
                            <th rowspan="2">Department</th>
                            <th rowspan="2">Program</th>
                            <th colspan="7">Marks</th>
                            @if (auth()->user()->role == 'instructor' || auth()->user()->role == 'admin')
                            <th>Evalute</th>
                            @endif
                        </tr>
                        <tr>
                            <td>Quiz</td>
                            <td>Final</td>
                            <td>Midterm</td>
                            <td>Assigment</td>
                            <td>Project</td>
                            <td>Lab</td>
                            <td>others</td>
                        </tr>
                        @foreach ($students as $student)
                            <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <td>{{ $student->student_id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->collage }}</td>
                                <td>{{ $student->department }}</td>
                                <td>{{ $student->program }}</td>
                                <td>{{ $student->quiz }}</td>
                                <td>{{ $student->final }}</td>
                                <td>{{ $student->midtrem }}</td>
                                <td>{{ $student->assignments }}</td>
                                <td>{{ $student->project }}</td>
                                <td>{{ $student->lap }}</td>
                                <td>{{ $student->others }}</td>
                                @if (auth()->user()->role == 'instructor' || auth()->user()->role == 'admin')
                                    <td><a href="{{ route('students.edit', $student->id) }}" class="btn">Edit</a></td>
                                @endif
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
