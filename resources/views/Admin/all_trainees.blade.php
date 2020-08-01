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
                    @include('layouts.cards')
                    <div class="row">
                    @include('layouts.messages')
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
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($all_trainees as $trainees)
                                    <tr class="font-weight-bold">
                                        <td>{{$trainees->last_name}} {{$trainees->first_name}}</td>
                                        <td>{{$trainees->course_name}}</td>
                                        <td>{{ $trainees->created_at->format('Y-m-d')}}</td>
                                        <td>{{$trainees->email}}</td>
                                        <td>{{$trainees->gender}}</td>
                                        <td>{{$trainees->date_of_birth}}</td>
                                        <td>{{$trainees->nationality}}</td>
                                        <td>{{$trainees->country}}</td>
                                        <td>{{$trainees->state}}</td>
                                        <td>{{$trainees->city}}</td>
                                        <td>{{$trainees->phone_number}}</td>
                                        <td>{{$trainees->marital_status}}</td>
                                        <td>{{$trainees->denomination}}</td>
                                        <td>{{$trainees->ministry}}</td>
                                        <td>{{$trainees->local_church}}</td>
                                        <td>{{$trainees->profession}}</td>
                                        <td>{{$trainees->occupation}}</td>
                                        <td>{{$trainees->payment_method}}</td>
                                        <td>{{$trainees->attendance_status}}</td>
                                        <td>{{$trainees->payment_status}}</td>
                                        <td><img src="{{asset('enrollment-photos/'. $trainees->passport_photo)}}" style="height:50px; width:50px;"/></td>
                                        <td><a href="/approve-trainees/{{$trainees->id}}" data-widget="approve" data-toggle="tooltip" title="approve">
                                        <span style="color:blue;"><i class="sl-icon-info"></i></span></a>
                                        <a href="/suspend-trainees/{{$trainees->id}}" data-widget="suspend" data-toggle="tooltip" title="suspend">
                                        <span style="color:blue;"><i class="sl-icon-share-alt"></i></span></a>
                                        <a href="/delete-trainees/{{$trainees->id}}" data-widget="delete" data-toggle="tooltip" title="delete"><i class="icon-Folder-Trash"></i></a></td>
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