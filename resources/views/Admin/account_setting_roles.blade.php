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
                    @include('layouts.messages')
                    <div class="row">
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 text-center">
                                    User
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0">
                                @foreach($get_user as $user)
                                <tr>
                                <td>{{$user->name}}</td>
                                </tr>
                            @endforeach
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 text-center">
                                    Roles:
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h5 class="box-title m-b-0">
                                    <form class="form-horizontal mt-3" action="/assign-roles/{{request()->route()->id}}" method="get">
                                     @csrf
                                    <div class="form-group row">
                                        <ul class="list-unstyled col-lg-12 col-md-12 col-xs-12 col-sm-12" id="myDiv">
                                            @if ($display_roles->currentPage() > 1)
                                            @php($i =  1 + (($display_roles->currentPage() - 1) * $display_roles->perPage()))
                                            @else
                                            @php($i = 1)
                                            @endif
                                            @foreach($display_roles as $get_user_role)
                                            <div class="checkbox">
                                                <label>
                                                <input type="radio" class="checkbox checkbox-primary" name="user_role" value="{{$get_user_role->id}}" @if($get_user_role->role == $get_my_role ) checked @endif/> {{ $get_user_role->role }}
                                                </label>
                                            </div>
                                            @endforeach
                                            @if(isset($search_query))
                                        {{ $display_roles->appends(['name' => $search_query])->links() }}
                                        @else
                                        {{ $display_roles->links() }}
                                        @endif
                                        </ul>
                                    </div>
                                    <div class="form-group row">
                                        <button type="button" class="btn btn-warning mr-1"><a href="/get-account-settings" style="color:white;">Back</a></button>
                                        
                                        <button type="submit" class="btn btn-primary ">Save</button>
                                    </div>
                                    </form>
                                    </h5>
                                </div>
                            </div>
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