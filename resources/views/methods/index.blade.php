@extends('layouts.app')

@section('content')
    <section class="messages services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Methods </h4>
                    </div>
                    {{-- <form action="#" class="row mb-4">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="gradesSection" id="gradesSection" class="form-control">
                                <option>Select Section</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select name="gradesMethod" id="gradesMethod" class="form-control">
                                <option>Select Method</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </form> --}}
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered ">
                        <tr>
                            <th>ID</th>
                            <th>Method</th>
                            <th>Q1 Total</th>
                            <th>Q2 Total</th>
                            <th>Q3 Total</th>
                            <th>Q4 Total</th>
                            <th>Q5 Total</th>
                            <th>Q6 Total</th>
                            <th>Q1 CLO</th>
                            <th>Q2 CLO</th>
                            <th>Q3 CLO</th>
                            <th>Q4 CLO</th>
                            <th>Q5 CLO</th>
                            <th>Q6 CLO</th>
                            <th>Show Grades</th>
                            <th>Add Grades</th>
                        </tr>
                        @foreach ($questions as $question)

                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$question->method}}</td>
                            <td>{{$question->q1_total}}</td>
                            <td>{{$question->q2_total}}</td>
                            <td>{{$question->q3_total}}</td>
                            <td>{{$question->q4_total}}</td>
                            <td>{{$question->q5_total}}</td>
                            <td>{{$question->q6_total}}</td>
                            <td>{{$question->q1_clo}}</td>
                            <td>{{$question->q2_clo}}</td>
                            <td>{{$question->q3_clo}}</td>
                            <td>{{$question->q4_clo}}</td>
                            <td>{{$question->q5_clo}}</td>
                            <td>{{$question->q6_clo}}</td>
                            <td><a href="{{ route('methods.grades', $question->id) }}" class="btn">Show Grades</a></td>
                            <td><a href="{{ route('methods.grades.create', $question->id) }}" class="btn">Add Grades</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
