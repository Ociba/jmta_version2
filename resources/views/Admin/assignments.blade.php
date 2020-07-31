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
                                        <th class="text-white">Assignment</th>
                                        <th class="text-white">Answer</th>
                                        <th class="text-white">Mark</th>
                                        @if(in_array('Can view assignment actions', auth()->user()->getUserPermisions()))
                                        <th class="text-white">Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($get_assignment_answers as $answers)
                                    <tr class="font-weight-bold">
                                        <td>{{$answers->name}}</td>
                                        <td>{{$answers->assignment}}</td>
                                        <td><a href="{{asset('assignment-work/'.$answers->answer)}}" target="_blank">{{$answers->answer}}</a></td>
                                        <td>{{$answers->mark}}</td>
                                        @if(in_array('Can add assignment marks', auth()->user()->getUserPermisions()))
                                        <td><a href="/add-assignment-marks/{{$answers->id}}">Add mark</a></td>
                                        @endif
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