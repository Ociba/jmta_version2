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
                    <div class="col-md-12 col-lg-12 col-xlg-12">
                        <div class="card card-body">
                                <form class="form-horizontal mt-3" action="/create-role" method="get">
                                @csrf
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <div class="form-group row">
                                    <input type="text" class="form-control" placeholder="Enter role" name="role" required>
                                    </div>
                                    <div class="form-group row">
                                        <button type="button" class="btn btn-warning mr-1"><a href="/get-account-settings" style="color:white;">Back</a></button>
                                        
                                        <button type="submit" class="btn btn-primary ">Save</button>
                                    </div>
                                </div>
                                </form>
                    </div>
                </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>