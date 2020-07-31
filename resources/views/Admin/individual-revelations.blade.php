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
                                        <th class="text-white">One</th>
                                        <th class="text-white">Two</th>
                                        <th class="text-white">Three</th>
                                        <th class="text-white">Four</th>
                                        <th class="text-white">Five</th>
                                        <th class="text-white">Six</th>
                                        <th class="text-white">Seven</th>
                                        <th class="text-white">Day</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($individual_revelations as $individual)
                                    <tr class="font-weight-bold">
                                        <td>{{$individual->revelation_one}}</td>
                                        <td>{{ $individual->revelation_two}}</td>
                                        <td>{{$individual->revelation_three}}</td>
                                        <td>{{$individual->revelation_four}}</td>
                                        <td>{{$individual->revelation_five}}</td>
                                        <td>{{$individual->revelation_six}}</td>
                                        <td>{{$individual->revelation_seven}}</td>
                                        <td>{{$individual->day_number}}</td>
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