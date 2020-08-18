<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        @include('layouts.css')
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
            @include('layouts.topbar')
            @include('layouts.sidebar')
            <div class="page-wrapper">
                <div class="container-fluid">
                    @include('layouts.breadcrumbs')
                    <div class="row">
                    <div class="col-12">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-white">{{ request()->route()->getName() }}</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40 text-white">
                            <table id="example23"
                                class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Course</th>
                                        <th class="text-white">Date</th>
                                        <th class="text-white">Email</th>
                                        {{--
                                        <th class="text-white">Image</th>
                                        <th class="text-white">Status</th>
                                        --}}
                                        <th class="text-white">View more data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($all_courses_enrolled as $course)
                                    <tr class="font-weight-bold">
                                        <td>{{$course->last_name}} {{$course->first_name}}</td>
                                        <td>{{$course->course_name}}</td>
                                        <td>{{$course->created_at->format('d-m-Y')}}</td>
                                        <td>{{$course->email}}</td>
                                        <td><a href="/get-individual-course-enrolled/{{$course->id}}"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>