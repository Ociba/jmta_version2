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
        <link href="{{asset('admin_pages/node_modules/footable/css/footable.bootstrap.min.css')}}" rel="stylesheet">
        <!-- Page CSS -->
        <link href="{{asset('admin_pages/css/pages/contact-app-page.css')}}" rel="stylesheet">
        <link href="{{asset('admin_pages/css/pages/footable-page.css')}}" rel="stylesheet">
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
            @include('layouts.topbar')
            @include('layouts.sidebar')
            <div class="page-wrapper">
                <div class="container-fluid">
                    @include('layouts.breadcrumbs')
                    <div class="row" id="foot">
                        <div class="col-12">
                            <div class="card">
                                <!-- .left-right-aside-column-->
                                <div class="contact-page-aside">
                                    <!-- .left-aside-column-->
                                    <div class="left-aside bg-light-part">
                                        <ul class="list-style-none">
                                            <li class="box-label text-white">Role
                                                    </li>
                                            <li class="divider"></li>
                                            @foreach($get_selected_role as $roles)
                                            <li class="text-white">{{$roles->role}}</li>
                                            @endforeach
                                            <li class="box-label text-white"><a href="/get-account-settings">Go Back</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.left-aside-column-->
                                    <div class="right-aside ">
                                        <div class="right-page-header">
                                            <div class="d-flex">
                                                <div class="align-self-center">
                                                    <h4 class="card-title m-t-10">Permission(s) </h4>
                                                </div>
                                                <div class="col-md-7 pull-right text-right d-none d-md-block">
                                            <a href="/add-permission/{{request()->route()->id}}" button type="button" class="btn btn-info"> Add Permission</a>
                                        </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="demo-foo-addrow"
                                                class="table table-bordered m-t-30 no-wrap table-hover contact-list"
                                                data-paging="true" data-paging-size="7">
                                                <thead>
                                                    <tr>
                                                        <th>Permission</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($get_all_permissions as $permission)
                                                    <tr>
                                                        <td>{{$permission->permission}}</td>
                                                        <td>
                                                        <form action="/unsign-permission/{{$permission->id}}" method="get">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Remove</button>
                                                        </form>
                                                        </td>
                                                        
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- .left-aside-column-->
                                    </div>
                                    <!-- /.left-right-aside-column-->
                                </div>
                                </div>
                            </div>
                         @include('layouts.footer')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.javascript')
        <script>
        $(function () {
            $('#demo-foo-addrow').footable();
        });
    </script>
    <script src="{{asset('admin_pages/node_modules/footable/js/footable.min.js')}}"></script>
    </body>
</html>