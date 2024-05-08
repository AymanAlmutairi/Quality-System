@extends('layouts.app')

@section('content')
    <section class="messages services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Grades </h4>
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
                            <th>Names</th>

                            @for ($i = 1; $i < $method->questions_count + 1; $i++)
                                <th>Q{{ $i }}</th>
                            @endfor
                            <th>Total</th>
                        </tr>
                        @foreach ($grades as $grade)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $grade->student->name }}</td>
                                @for ($i = 1; $i < $method->questions_count + 1; $i++)
                                    @php
                                        $q = 'q' . '' . $i;
                                    @endphp
                                    <td>{{ $grade->$q }}</td>
                                @endfor
                                <td>{{ $grade->total }}</td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
