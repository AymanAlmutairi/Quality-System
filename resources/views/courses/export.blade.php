<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Shaqra University</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets//img/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .messages .overlay-table .table {
            vertical-align: middle;
            min-width: 1000px;
            max-width: 1300px;
            width: 100%;
        }

        .table {
            --bs-table-color: var(--bs-body-color);
            --bs-table-bg: transparent;
            --bs-table-border-color: var(--bs-border-color);
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: var(--bs-body-color);
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: var(--bs-body-color);
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: var(--bs-body-color);
            --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: var(--bs-table-color);
            vertical-align: top;
            border-color: var(--bs-table-border-color);
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        table {
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            text-indent: initial;
            border-spacing: 2px;
            border-color: gray;
        }

        .table-bordered>:not(caption)>* {
            border-width: 1px 0;
        }

        .table>tbody>tr:nth-of-type(odd)>* {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table-bordered>:not(caption)>*>* {
            border-width: 0 1px;
        }

        .logo img {
            width: 200px;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <section class="messages services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="logo text-center" style="margin-bottom:30px;">
                        <a class="navbar-brand" href="index.php">
                            <img src="{{ asset('assets/img/logo/logo-light.png') }}" alt="Logo"
                                class="logo-transperant img-fluid">
                        </a>
                    </div>
                    <div class="head-section">
                        <h4 class="text-center"> Course specification </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered  ">
                        <tbody>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col" class="text-start">Course Title</th>
                                <td scope="col" class="text-start">{{ $course->title }}</td>
                            </tr>
                            <tr>
                                <th scope="col">2</th>
                                <th scope="col" class="text-start">Course Code</th>
                                <td scope="col" class="text-start">{{ $course->code }}</td>
                            </tr>
                            <tr>
                                <th scope="col">3</th>
                                <th scope="col" class="text-start">Department</th>
                                <td scope="col" class="text-start">{{ $course->department }}</td>
                            </tr>
                            <tr>
                                <th scope="col">4</th>
                                <th scope="col" class="text-start">Program</th>
                                <td scope="col" class="text-start">{{ $course->program }}</td>
                            </tr>
                            <tr>
                                <th scope="col">5</th>
                                <th scope="col" class="text-start">College</th>
                                <td scope="col" class="text-start">{{ $course->college }}</td>
                            </tr>
                            <tr>
                                <th scope="col">6</th>
                                <th scope="col" class="text-start">Institution</th>
                                <td scope="col" class="text-start">{{ $course->institution }}</td>
                            </tr>
                            <tr>
                                <th scope="col">7</th>
                                <th scope="col" class="text-start">Academic Year</th>
                                <td scope="col" class="text-start">{{ $course->Academic_year }}</td>
                            </tr>
                            <tr>
                                <th scope="col">8</th>
                                <th scope="col" class="text-start">Semester</th>
                                <td scope="col" class="text-start">{{ $course->semester }}</td>
                            </tr>
                            <tr>
                                <th scope="col">9</th>
                                <th scope="col" class="text-start">Course Instructor</th>
                                <td scope="col" class="text-start">{{ $course->instructor->name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">10</th>
                                <th scope="col" class="text-start">Course Coordinator</th>
                                <td scope="col" class="text-start">{{ $course->coordinator->name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">11</th>
                                <th scope="col" class="text-start">Location</th>
                                <td scope="col" class="text-start">{{ $course->location }} </td>
                            </tr>
                            <tr>
                                <th scope="col">12</th>
                                <th scope="col" class="text-start">Number of Section(s)</th>
                                <td scope="col" class="text-start">{{ $course->number_of_sections }}</td>
                            </tr>
                            <tr>
                                <th scope="col">13</th>
                                <th scope="col" class="text-start">Number of Students (Starting the Course)</th>
                                <td scope="col" class="text-start">{{ $course->number_of_start }}</td>
                            </tr>
                            <tr>
                                <th scope="col">14</th>
                                <th scope="col" class="text-start">Number of Students (Completed the Course)</th>
                                <td scope="col" class="text-start">{{ $course->number_of_complete }}</td>
                            </tr>
                            <tr>
                                <th scope="col">15</th>
                                <th scope="col" class="text-start">Report Date</th>
                                <td scope="col" class="text-start">{{ $course->start_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Contact Hours </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered  " style="width: 1200px">
                        <tbody>
                            <tr>
                                <th scope="col">1</th>
                                <th scope="col" class="text-start">Lectures</th>
                                <td scope="col" class="text-start">{{ $course->number_of_lectures }}</td>
                            </tr>
                            <tr>
                                <th scope="col">2</th>
                                <th scope="col" class="text-start">Laboratory / Studio</th>
                                <td scope="col" class="text-start">{{ $course->studio }}</td>
                            </tr>
                            <tr>
                                <th scope="col">3</th>
                                <th scope="col" class="text-start">Field</th>
                                <td scope="col" class="text-start">{{ $course->field }}</td>
                            </tr>
                            <tr>
                                <th scope="col">4</th>
                                <th scope="col" class="text-start">Tutorial</th>
                                <td scope="col" class="text-start">{{ $course->tutorial }}</td>
                            </tr>
                            <tr>
                                <th scope="col">5</th>
                                <th scope="col" class="text-start">Others ( Specify )</th>
                                <td scope="col" class="text-start">{{ $course->others }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center">Course Content</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered  ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>List of Topics</th>
                                <th>Contact Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course->contents as $content)
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col" class="text-start">{{ $content->title }}</th>
                                    <td scope="col" class="text-start">{{ $content->content_hours }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center">Course Learning Outcomes (CLOs), Teaching Strategies and Assessment
                            Methods
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="overlay-table">
                    <table class="table table-bordered  ">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th class="text-start">Course Learning Outcomes</th>
                                {{-- <th class="text-start">Code of CLOs aligned with program</th> --}}
                                <th class="text-start">Assessment Methods</th>
                            </tr>
                            <tr class="main-tr">
                                <th>1.0</th>
                                <th colspan="3" class="text-start">Knowledge and understanding</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course->Knowledge as $Knowledge)
                                <tr>
                                    <th scope="col">1. {{ $loop->index + 1 }}</th>
                                    <td scope="col" class="text-start">{{ $Knowledge->outcomes }}</td>
                                    <td scope="col" class="text-start">{{ $Knowledge->method }}</td>
                                </tr>
                            @endforeach
                            <tr class="main-tr">
                                <th>2.0</th>
                                <th colspan="3" class="text-start">Skills</th>
                            </tr>
                            @foreach ($course->skills as $skill)
                                <tr>
                                    <th scope="col">2. {{ $loop->index + 1 }}</th>
                                    <td scope="col" class="text-start">{{ $skill->outcomes }}</td>
                                    <td scope="col" class="text-start">{{ $skill->method }}</td>
                                </tr>
                            @endforeach

                            <tr class="main-tr">
                                <th>3.0</th>
                                <th colspan="3" class="text-start">Values, autonomy, and responsibility</th>
                            </tr>

                            @foreach ($course->values as $value)
                                <tr>
                                    <th scope="col">3. {{ $loop->index + 1 }}</th>
                                    <td scope="col" class="text-start">{{ $value->outcomes }}</td>
                                    <td scope="col" class="text-start">{{ $value->method }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Recommendations </h4>
                    </div>
                    <p>{{ $course->recommendations }}</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="head-section">
                        <h4 class="text-center"> Comments </h4>
                    </div>
                    <p>{{ $course->comments }}</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
