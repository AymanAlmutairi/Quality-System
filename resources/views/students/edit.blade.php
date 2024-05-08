@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate
                    action="{{ route('students.update', $student->id) }}" method="Post">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Edit Student</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="student_id" id="idStudent" class="form-control"
                                placeholder="Student ID*" required value="{{ $student->student_id }}">
                            <div class="invalid-feedback">Please Enter a Student ID.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="name" id="nameStudent" class="form-control"
                                placeholder="Student Name*" required value="{{ $student->name }}">
                            <div class="invalid-feedback">Please Enter a Student Name.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="email" id="nameStudent" class="form-control"
                                placeholder="Student Email*" required value="{{ $student->email }}">
                            <div class="invalid-feedback">Please Enter a Student Email.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="collage" id="collegeStudent" class="form-control"
                                placeholder="college*" required value="{{ $student->collage }}">
                            <div class="invalid-feedback">Please Enter a College.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="department" id="deptStudent" class="form-control"
                                placeholder="Department*" required value="{{ $student->department }}">
                            <div class="invalid-feedback">Please Enter a Department.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="program" id="programStudent" class="form-control"
                                placeholder="Program*" required value="{{ $student->program }}">
                            <div class="invalid-feedback">Please Enter a Program.</div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="courses[]" id="sectionsStudent" class="form-control" required multiple>
                                <option value="0" selected disabled>Please Choose Courses</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" @if ($student->courses->id === $course->id) @endif>{{ $course->title }}</option>
                                @endforeach
                            </select>
                            <small>Hold down the control (ctrl) button to select multiple options.</small>
                            <div class="invalid-feedback">Please Enter the Sections.</div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="quiz" id="quiz" class="form-control"
                                placeholder="Quiz Degree*" required value="{{ $student->quiz }}">
                            <div class="invalid-feedback">Please Enter a Quiz Degree.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="final" id="final" class="form-control"
                                placeholder="Quiz Final*" required value="{{ $student->final }}">
                            <div class="invalid-feedback">Please Enter a Final Degree.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="midterm" id="midtrem" class="form-control"
                                placeholder="Quiz Midterm*" required value="{{ $student->midterm }}">
                            <div class="invalid-feedback">Please Enter a midtram Degree.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="assignments" id="assignments" class="form-control"
                                placeholder="quiz assignments*" required value="{{ $student->assignments }}">
                            <div class="invalid-feedback">Please Enter a Assignments Degree.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="project" id="projrct" class="form-control"
                                placeholder="quiz project*" required value="{{ $student->project }}">
                            <div class="invalid-feedback">Please Enter a project Degree.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="lap" id="lap" class="form-control" placeholder="lap*"
                                required value="{{ $student->lap }}">
                            <div class="invalid-feedback">Please Enter a Lap Degree.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <textarea type="text" name="others" id="lap" class="form-control" placeholder="others*" required>{{ $student->others }}</textarea>
                            <div class="invalid-feedback">Please Enter a others Degree.</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitStudent"><span>Update</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
