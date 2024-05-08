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
                            <th>Course Coordinator</th>
                            <th>Edit</th>
                        </tr>
                        @foreach ($requests as $request)
                            <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <td>{{ $request->course->title }}</td>
                                <td>{{ $request->user->name }}</td>
                                <td><a href="{{ route('courses.requests.accept', $request->id) }}"
                                        class="btn me-2">Accept</a><a
                                        href="{{ route('courses.requests.refuse', $request->id) }}"
                                        class="btn">Refuesd</a></td>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
