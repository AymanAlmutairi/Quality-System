@extends('layouts.app')

@section('content')
    <section class="messages services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Users </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->index +1}}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role_name }}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
