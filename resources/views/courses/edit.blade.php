@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate
                    action="{{ route('courses.update', $course->id) }}" method="POST">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Edit Course</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="title" id="titleCourse" class="form-control"
                                placeholder="Course Title*" required value = "{{ $course->title }}">
                            <div class="invalid-feedback">Please Enter a Title.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="code" id="codeCourse" class="form-control"
                                placeholder="Course Code*" required value = "{{ $course->code }}">
                            <div class="invalid-feedback">Please Enter a Code.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="department" id="deptCourse" class="form-control"
                                placeholder="Department*" required value = "{{ $course->department }}">
                            <div class="invalid-feedback">Please Enter a Department.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="program" id="programCourse" class="form-control"
                                placeholder="Program*" required value = "{{ $course->program }}">
                            <div class="invalid-feedback">Please Enter a Program.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="college" id="collegeCourse" class="form-control"
                                placeholder="college*" required value = "{{ $course->college }}">
                            <div class="invalid-feedback">Please Enter a College.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" min="1" max="5" name="level" id="LevelCourse"
                                class="form-control" placeholder="Level*" required value = {{$course->level}}>
                            <div class="invalid-feedback">Please Enter a Level.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="institution" id="institutionCourse" class="form-control"
                                placeholder="Institution*" required value={{ $course->institution }}>
                            <div class="invalid-feedback">Please Enter a Institution.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="Academic_year" id="academicYearCourse" class="form-control">
                                <option>Select Academic Year</option>
                                <option value="1" @if ($course->Academic_year == 1) selected @endif>2020-2021</option>
                                <option value="2" @if ($course->Academic_year == 2) selected @endif>2021-2022</option>
                                <option value="3" @if ($course->Academic_year == 3) selected @endif>2022-2023</option>
                                <option value="4" @if ($course->Academic_year == 4) selected @endif>2023-2024</option>
                            </select>
                            <div class="invalid-feedback">Please Select Academic Year.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="semester" id="SemesterCourse" class="form-control">
                                <option>Select Semester</option>
                                <option value="first" @if ($course->semester == 'first') selected @endif>First</option>
                                <option value="second" @if ($course->semester == 'second') selected @endif>Second</option>
                            </select>
                            <div class="invalid-feedback">Please Select Semester.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <select name="instructor_id" class="form-control">
                                <option value="0" selected>Please Choose Instructor</option>
                                @foreach ($instructors as $instructor)
                                    <option value="{{ $instructor->id }}" @if ($course->instructor_id == $instructor->id) selected @endif>
                                        {{ $instructor->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please Choose an Instructor.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <select name="section_id" class="form-control">
                                <option value="0" selected>Please Choose Section</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}" @if ($course->section_id == $section->id) selected @endif>
                                        {{ $section->section_id }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please Choose an Instructor.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <select name="coordinator_id" class="form-control">
                                @foreach ($coordinators as $coordinator)
                                    <option value="{{ $coordinator->id }}"
                                        @if ($course->coordinator_id == $coordinator->id) selected @endif>{{ $coordinator->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please Choose a Coordinator.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="location" id="locationCourse" class="form-control"
                                placeholder="Location*" required value={{ $course->location }}>
                            <div class="invalid-feedback">Please Enter a Location.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" min="1" max="15" name="number_of_sections"
                                id="number_of_sections" class="form-control" placeholder="Number of Sections*" required
                                value={{ $course->number_of_sections }}>
                            <div class="invalid-feedback">Please Enter a Number of Sections.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="number" min="1" name="number_of_start" id="studstarNameCourse"
                                class="form-control" placeholder="Number of Students (Starting the Course)*" required
                                value={{ $course->number_of_start }}>
                            <div class="invalid-feedback">Please Enter a Number of Students.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" min="1" name="number_of_complete" id="studendNameCourse"
                                class="form-control" placeholder="Number of Students (Completed the Course)*" required
                                value={{ $course->number_of_complete }}>
                            <div class="invalid-feedback">Please Enter a Number of Students.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="date" name="start_date" id="reportDateCourse" class="form-control"
                                placeholder="Report Date*" required value={{ $course->start_date }}>
                            <div class="invalid-feedback">Please Enter a Report Date.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="numbers" name="number_of_lectures" id="lecturesCourse" class="form-control"
                                placeholder="Lectures*" required value={{ $course->number_of_lectures }}>
                            <div class="invalid-feedback">Please Enter a Lectures.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" min="0" name="studio" id="laboratoryCourse"
                                class="form-control" placeholder="Laboratory / Studio*" required
                                value={{ $course->studio }}>
                            <div class="invalid-feedback">Please Enter a Laboratory / Studio.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="field" id="field" class="form-control"
                                placeholder="Field*" required value={{ $course->field }}>
                            <div class="invalid-feedback">Please Enter a Field.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" min="1" name="tutorial" id="tutorialCourse"
                                class="form-control" placeholder="Tutorial*" required value={{ $course->tutorial }}>
                            <div class="invalid-feedback">Please Enter a Tutorial.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" min="1" name="others" id="othersCourse" class="form-control"
                                placeholder="Others ( Specify )*" required value={{ $course->others }}>
                            <div class="invalid-feedback">Please Enter a Others ( Specify ).</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitCourse"><span>Update</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
