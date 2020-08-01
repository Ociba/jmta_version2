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
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print </h6>
                        <div class="table-responsive m-t-40 text-white">
                            <table id="example23"
                                class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-white">Name(s)</th>
                                        <th class="text-white">Email</th>
                                        <th class="text-white">Role</th>
                                        <th class="text-white">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($get_all_users_with_roles as $users_with_role)
                                    <tr class="font-weight-bold">
                                        <td>{{$users_with_role->name}}</td>
                                        <td>{{$users_with_role->email}}</td>
                                        <td><a href="/display-role/{{ $users_with_role->id}}">{{ $users_with_role->role }}</a></td>
                                         <td><a href="/get_user_and_roles/{{$users_with_role->id}}">
                                        <span style="color:blue;"><i class="sl-icon-key"></i></span></a>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="m-3"><a href="/add-role-form" button class="btn btn-primary">Create Role</button></a></div>
                    </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>