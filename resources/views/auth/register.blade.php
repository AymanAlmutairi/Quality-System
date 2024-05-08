@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate method="POST"
                    action="{{ route('register') }}">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Register</h2>
                            <p>
                                If you already have an account with us, please log in at
                                <a href="{{ route('login') }}">Login</a>.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="name" id="userNameRegister" class="form-control"
                                placeholder="full name*" required>
                            <div class="invalid-feedback">Please Enter a Name.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="email" id="userEmailRegister" class="form-control"
                                placeholder="Email*" required>
                            <div class="invalid-feedback">Please Enter a Email.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="phone" id="userPhoneRegister" class="form-control"
                                placeholder="phone number*" required>
                            <div class="invalid-feedback">Please Enter a Phone.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="address" id="userAddressRegister" class="form-control"
                                placeholder="address*" required>
                            <div class="invalid-feedback">Please Enter a Address.</div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="file" class="form-control ps-3 pe-5" name="userImgRegister" id="userImgRegister"
                                accept="image/*" multiple="false" required="">
                            <div class="upload_file form-control ps-3 pe-5">
                                <img src="assets/img/icons/1.png" alt="Upload File">
                                <span>Upload Photo</span>
                            </div>
                            <div class="invalid-feedback">Please Upload a Photo.</div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="password" name="Password" id="userPasswordRegister"
                                class="form-control" placeholder="Password*" required>
                            <div class="invalid-feedback">Please Enter a Password.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="password" name="Password_confiremed" id="userRePasswordRegister"
                                class="form-control" placeholder="Password*" required>
                            <div class="invalid-feedback">Please Enter Password again.</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitRegister"><span>register</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
