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
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex p-10 no-block">
                                        <div class="align-slef-center">
                                            <h2 class="m-b-0">70</h2>
                                            <h6 class="text-muted m-b-0">Total Trainees</h6>
                                        </div>
                                        <div class="align-self-center display-6 ml-auto"><i class="text-success fa fa-users"></i></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex p-10 no-block">
                                        <div class="align-slef-center">
                                            <h2 class="m-b-0">15</h2>
                                            <h6 class="text-muted m-b-0">New Trainees</h6>
                                        </div>
                                        <div class="align-self-center display-6 ml-auto"><i class="text-info fa fa-users"></i></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex p-10 no-block">
                                        <div class="align-slef-center">
                                            <h2 class="m-b-0">20</h2>
                                            <h6 class="text-muted m-b-0">Old Trainees</h6>
                                        </div>
                                        <div class="align-self-center display-6 ml-auto"><i class="text-primary fa fa-users"></i></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex p-10 no-block">
                                        <div class="align-slef-center">
                                            <h2 class="m-b-0">80</h2>
                                            <h6 class="text-muted m-b-0">Bible Marathon</h6>
                                        </div>
                                        <div class="align-self-center display-6 ml-auto"><i class="text-danger fa fa-users"></i></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>