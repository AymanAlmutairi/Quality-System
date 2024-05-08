@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate action="{{route('students.store')}}" method="Post">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Add Student</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="student_id" id="idStudent" class="form-control"
                                placeholder="Student ID*" required>
                            <div class="invalid-feedback">Please Enter a Student ID.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="name" id="nameStudent" class="form-control"
                                placeholder="Student Name*" required>
                            <div class="invalid-feedback">Please Enter a Student Name.</div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="email" id="nameStudent" class="form-control"
                                placeholder="Student Email*" required>
                            <div class="invalid-feedback">Please Enter a Student Email.</div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="collage" id="collegeStudent" class="form-control"
                                placeholder="college*" required>
                            <div class="invalid-feedback">Please Enter a College.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="department" id="deptStudent" class="form-control"
                                placeholder="Department*" required>
                            <div class="invalid-feedback">Please Enter a Department.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="program" id="programStudent" class="form-control"
                                placeholder="Program*" required>
                            <div class="invalid-feedback">Please Enter a Program.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="courses[]" id="sectionsStudent" class="form-control" required multiple>
                                <option value="0" selected disabled>Please Choose Courses</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                @endforeach
                            </select>
                            <small>Hold down the control (ctrl) button to select multiple options.</small>
                            <div class="invalid-feedback">Please Enter the Sections.</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitStudent"><span>add</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
