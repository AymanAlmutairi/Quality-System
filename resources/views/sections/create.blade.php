@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate action="{{ route('sections.store') }}"
                    method="POST">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Add Section</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="section_id" id="idSection" class="form-control"
                                placeholder="Section ID*" required>
                            <div class="invalid-feedback">Please Enter a Section ID.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="department" id="deptSection" class="form-control"
                                placeholder="Department*" required>
                            <div class="invalid-feedback">Please Enter a Department.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="program" id="programSection" class="form-control"
                                placeholder="Program*" required>
                            <div class="invalid-feedback">Please Enter a Program.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="college" id="collegeSection" class="form-control"
                                placeholder="college*" required>
                            <div class="invalid-feedback">Please Enter a College.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="instructor_id" class="form-control">
                                <option value="0" selected>Please Choose Instructor</option>
                                @foreach ($instructors as $instructor)
                                    <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please Choose an Instructor.</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitSection"><span>add</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
