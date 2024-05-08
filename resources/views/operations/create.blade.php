@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate action="{{route('operations.store')}}" method="Post">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Add Operation</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="count" id="idCLO" class="form-control"
                                placeholder="Count of CLO*" required>
                            <div class="invalid-feedback">Please Enter a Number.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="code" id="codeCLO" class="form-control" placeholder="CLO Code*"
                                required>
                            <div class="invalid-feedback">Please Enter a CLO Code.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="questions_number" id="questionNumberCLO" class="form-control"
                                placeholder="Question Number*" required>
                            <div class="invalid-feedback">Please Enter a Question Number.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" name="clo_id" id="idCLO" class="form-control"
                                placeholder="CLO or ID*" required>
                            <div class="invalid-feedback">Please Enter ID.</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn userSubmitCLO"><span>add</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
