@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate action="{{route('contents.store')}}" method="POST">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Add Course Content</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="course_id" id="codeCourse" class="form-control" placeholder="Course Code*"
                                required>
                                <option class="">Please choose Course.</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" title="{{ $course->title }}">{{ $course->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="title" id="topicCourse" class="form-control"
                                placeholder="Topic of Content*" required>
                            <div class="invalid-feedback">Please Enter Topic of Content.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" min="1" name="content_hours" id="hoursCourse" class="form-control"
                                placeholder="Content Hours*" required>
                            <div class="invalid-feedback">Please Enter Content Hours.</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitCourse"><span>add</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
