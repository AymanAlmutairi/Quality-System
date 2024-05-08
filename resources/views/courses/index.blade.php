@extends('layouts.app')

@section('content')
    <section class="messages services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Course </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>#</th>
                            <th>Course Title</th>
                            <th>Course Code</th>
                            <th>College</th>
                            <th>Department</th>
                            <th>Program</th>
                            <th>Level</th>
                            <th>Section</th>
                            <th>STudents Count</th>
                            <th>Show</th>

                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'course_coordinator')
                                <th>Edit</th>
                            @endif
                            <th>Report</th>
                            <th>Method</th>
                        </tr>
                        @foreach ($courses as $course)
                            <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->code }}</td>
                                <td>{{ $course->college }}</td>
                                </td>
                                <td>{{ $course->department }}</td>
                                <td>{{ $course->program }}</td>
                                <td>{{ $course->level }}</td>
                                <td>{{ $course->section?->section_id }}</td>
                                <td>{{ $course->students_count }}</td>
                                <td><a href="{{ route('courses.show', $course->id) }}" class="btn">Visit</a></td>
                                @if (auth()->user()->role == 'admin')
                                    <td><a href="{{ route('courses.edit', $course->id) }}" class="btn">Edit</a></td>
                                @elseif(auth()->user()->role == 'course_coordinator')
                                    @php
                                        $request = App\Models\CourseRequest::where('course_id', $course->id)
                                            ->where('user_id', auth()->id())
                                            ->first();
                                    @endphp
                                    @if ($request)
                                        @if ($request->status == 1)
                                            <td><a href="{{ route('courses.edit', $course->id) }}" class="btn">Edit</a>
                                            </td>
                                        @else
                                            <td><a href="{{ route('courses.request-edit', $course->id) }}"
                                                    class="btn">Pending
                                                </a></td>
                                        @endif
                                    @else
                                        <td><a href="{{ route('courses.request-edit', $course->id) }}"
                                                class="btn">Request
                                            </a></td>
                                    @endif
                                @else
                                    <td><a href="{{ route('courses.edit', $course->id) }}" class="btn">Edit</a></td>
                                @endif


                                <td><a href="{{ route('courses.report', $course->id) }}" class="btn">Report</a></td>
                                <td><a href="{{ route('questions.create', $course->id) }}" class="btn">Evalute</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
