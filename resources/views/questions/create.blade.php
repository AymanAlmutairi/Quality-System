@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate action="{{ route('questions.store') }}"
                    method="POST">
                    @csrf

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Create an evalution Method</h2>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="enterGradesName" id="enterGradesName" class="form-control">
                                <option>Select Section</option>
                                <option value="1">Section</option>
                                <option value="2">Section</option>
                                <option value="3">Section</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="method" id="enterGradesQ1" class="form-control"
                                placeholder="Method" required>
                        </div>
                    </div>
                    <input type="hidden" name="course_id" value="{{ $course->id }}" />
                    <input type="hidden" name="section_id" value="{{ $course->section_id }}" />
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-start mt-5 mb-5">
                            <h2>Create Question</h2>
                        </div>
                    </div>
                    <div class="quest">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="head-section text-start mb-0">
                                    <h4 class="mb-0">Question 1</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="q1_total" id="createTotal2" class="form-control"
                                        placeholder="Total">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <select name="q1_clo" id="enterGradesName" class="form-control">
                                        <option value="0">Please Select</option>
                                        @foreach ($course->clo as $clo)
                                            <option value="{{ $clo->id }}">{{ $clo->outcomes }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quest">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="head-section text-start mb-0">
                                    <h4 class="mb-0">Question 2</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="q2_total" id="createTotal2" class="form-control"
                                        placeholder="Total">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <select name="q2_clo" id="enterGradesName" class="form-control">
                                        <option value="0">Please Select</option>
                                        @foreach ($course->clo as $clo)
                                            <option value="{{ $clo->id }}">{{ $clo->outcomes }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quest">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="head-section text-start mb-0">
                                    <h4 class="mb-0">Question 3</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="q3_total" id="createTotal3" class="form-control"
                                        placeholder="Total">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <select name="q3_clo" id="enterGradesName" class="form-control">
                                        <option value="0">Please Select</option>

                                        @foreach ($course->clo as $clo)
                                            <option value="{{ $clo->id }}">{{ $clo->outcomes }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quest">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="head-section text-start mb-0">
                                    <h4 class="mb-0">Question 4</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="q4_total" id="createTotal4" class="form-control"
                                        placeholder="Total">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <select name="q4_clo" id="enterGradesName" class="form-control">
                                        <option value="0">Please Select</option>
                                        @foreach ($course->clo as $clo)
                                            <option value="{{ $clo->id }}">{{ $clo->outcomes }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quest">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="head-section text-start mb-0">
                                    <h4 class="mb-0">Question 5</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="q5_total" id="createTotal5" class="form-control"
                                        placeholder="Total">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <select name="q5_clo" id="enterGradesName" class="form-control">
                                        <option value="0">Please Select</option>
                                        @foreach ($course->clo as $clo)
                                            <option value="{{ $clo->id }}">{{ $clo->outcomes }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quest">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="head-section text-start mb-0">
                                    <h4 class="mb-0">Question 6</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="q6_total" id="createTotal5" class="form-control"
                                        placeholder="Total">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <select name="q6_clo" id="enterGradesName" class="form-control">
                                        <option value="0">Please Select</option>
                                        @foreach ($course->clo as $clo)
                                            <option value="{{ $clo->id }}">{{ $clo->outcomes }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitCourse"><span>Create</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
