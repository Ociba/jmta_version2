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
                                        <th class="text-white">Gender</th>
                                        <th class="text-white">DOB</th>
                                        <th class="text-white">Nationality</th>
                                        <th class="text-white">Country</th>
                                        <th class="text-white">State</th>
                                        <th class="text-white">City</th>
                                        <th class="text-white">Contact</th>
                                        <th class="text-white">Marital Status</th>
                                        <th class="text-white">Denomination</th>
                                        <th class="text-white">Ministry</th>
                                        <th class="text-white">Local Church</th>
                                        <th class="text-white">Profession</th>
                                        <th class="text-white">Occupation</th>
                                        <th class="text-white">Payment Method</th>
                                        <th class="text-white">Attendance Status</th>
                                        <th class="text-white">Payment Status</th>
                                        <th class="text-white">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($old_trainees as $old)
                                    <tr class="font-weight-bold">
                                        <td>{{$old->last_name}} {{$old->first_name}}</td>
                                        <td>{{$old->course_name}}</td>
                                        <td>{{ $old->created_at->format('Y-m-d')}}</td>
                                        <td>{{$old->email}}</td>
                                        <td>{{$old->gender}}</td>
                                        <td>{{$old->date_of_birth}}</td>
                                        <td>{{$old->nationality}}</td>
                                        <td>{{$old->country}}</td>
                                        <td>{{$old->state}}</td>
                                        <td>{{$old->city}}</td>
                                        <td>{{$old->phone_number}}</td>
                                        <td>{{$old->marital_status}}</td>
                                        <td>{{$old->denomination}}</td>
                                        <td>{{$old->ministry}}</td>
                                        <td>{{$old->local_church}}</td>
                                        <td>{{$old->profession}}</td>
                                        <td>{{$old->occupation}}</td>
                                        <td>{{$old->payment_method}}</td>
                                        <td>{{$old->attendance_status}}</td>
                                        <td>{{$old->payment_status}}</td>
                                        <td><img src="{{asset('enrollment-photos/'. $old->passport_photo)}}" style="height:50px; width:50px;"/></td>
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