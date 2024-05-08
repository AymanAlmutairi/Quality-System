@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate method="POST" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>login</h2>
                            <p>
                                If you haven't have an account with us yet, please register at
                                <a href="{{route('register')}}">Register Now</a>.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="userEmailRegister"
                                        class="form-control" placeholder="Email*" required>
                                    <div class="invalid-feedback">Please Enter a Email.</div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="password" name="Password" id="userPasswordLogin"
                                        class="form-control" placeholder="Password*" required>
                                    <div class="invalid-feedback">Please Enter a Password.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitLogin"><span>login</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
