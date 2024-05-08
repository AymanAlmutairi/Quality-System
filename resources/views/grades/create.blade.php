@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate
                    action="{{ route('methods.grades.store') }}" method="POST">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Enter Grades</h2>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="section_id" id="enterGradesName" class="form-control">
                                <option>Select Section</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->section_id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <input type="hidden" name="section_id" value="{{ $method->section_id }}" />
                    <input type="hidden" name="method_id" value="{{ $method->id }}" />
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="student_id" id="enterGradesName" class="form-control">
                                <option>Select Name</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @for ($i = 1; $i < $method->questions_count+1; $i++)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="number" name="q{{ $i }}" id="enterGradesQ1" class="form-control"
                                    placeholder="Q{{ $i }}" required>
                            </div>
                        </div>
                    @endfor
                    {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input typ="number" name="q2" id="enterGradesQ2" class="form-control" placeholder="Q2"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="q3" id="enterGradesQ3" class="form-control" placeholder="Q3"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="q4" id="enterGradesQ4" class="form-control" placeholder="Q4"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="q5" id="enterGradesQ5" class="form-control" placeholder="Q5"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="q6" id="enterGradesQ6" class="form-control" placeholder="Q6"
                                required>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitCourse"><span>Enter</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
