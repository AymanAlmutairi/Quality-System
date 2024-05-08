@extends('layouts.app')

@section('content')
    <section class="messages services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> CLO Opretions </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>#</th>
                            <th>Count of CLO</th>
                            <th>CLO Code</th>
                            <th>Question Number</th>
                            <th>CLO or ID</th>
                        </tr>
                      @foreach ($operations as  $operation)
                        <tr>
                            <td>{{$loop->index +1 }}</td>
                            <th>{{$operation->count}}</th>
                            <td class="text-start">{{$operation->code}}</td>
                            <td>{{$operation->questions_number}}</td>
                            <td>{{$operation->clo_id}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
