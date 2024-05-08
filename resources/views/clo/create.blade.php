@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate action="{{ route('clos.store') }}"
                    method="POST">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Add Course Learning Outcomes (CLOs), Teaching Strategies And Assessment Methods</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="type" id="CLOCourse" class="form-control">
                                <option>Select CLO</option>
                                <option value="1">Knowledge and understanding</option>
                                <option value="2">Skills</option>
                                <option value="3">Values, autonomy, and responsibility</option>
                            </select>
                            <div class="invalid-feedback">Please Select CLO.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="outcomes" id="leaoutCourse" class="form-control"
                                placeholder="Course Learning Outcomes*" required>
                            <div class="invalid-feedback">Please Enter Course Learning Outcomes.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="method" id="assessmentMethodsCourse"
                                class="form-control" placeholder="assessment Methods*" required>
                            <div class="invalid-feedback">Please Enter Assessment Methods.</div>
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
