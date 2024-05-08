@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate action="{{route('users.store')}}" method="Post">
                   @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Add User</h2>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="idUser" id="idUser" class="form-control" placeholder="User Id*"
                                required>
                            <div class="invalid-feedback">Please Enter a Id.</div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="name" id="nameUser" class="form-control"
                                placeholder="User Name*" required>
                            <div class="invalid-feedback">Please Enter a Name.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="phone" id="userPhoneUser" class="form-control"
                                placeholder="phone number*" required>
                            <div class="invalid-feedback">Please Enter a Phone.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="email" id="userEmailUser" class="form-control"
                                placeholder="Email*" required>
                            <div class="invalid-feedback">Please Enter a Email.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="password" id="passwordUser" class="form-control"
                                placeholder="user password*" required>
                            <div class="invalid-feedback">Please Enter a Password.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="role" id="role" class="form-control">
                                <option>Select Type</option>
                                <option value="admin">Admin</option>
                                <option value="course_coordinator">Course Coordinator</option>
                                <option value="program_coordinator">Program Coordinator</option>
                                <option value="instructor">Instructors</option>
                                <option value="user">User</option>
                            </select>
                            <div class="invalid-feedback">Please Select Academic Year.</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitUser"><span>add</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
