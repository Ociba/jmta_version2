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
        <link href="{{asset('admin_pages/css/style2.css')}}" rel="stylesheet">
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <div class="page-wrapper">
        <div class="container-fluid">
        @include('layouts.breadcrumbs')
        <!-- Content Row -->
        
        @foreach($course_unit as $course)
        <div class="row">
            <h3 class="box-title text-white m-3">{{$course->course_unit}}</h3>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="left">
                    <div class="card-img embed-responsive embed-responsive-16by9 mb-3">
                         <iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="{{asset('course-video/'.$course->video)}}" webkitallowfullscreen=""></iframe>
                    </div>
                    <p class="font-weight-bold text-uppercase">{{$course->description}}</p>
                    <hr>
                    <div class="info-box">
                        <div class="card tab-style1">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">Overview</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Description</a> </li>
                                {{--
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Notes</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#announcements" role="tab">Announcements</a> </li>
                                --}}
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-2">
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="mail-contnet">
                                                    <h5>{{$course->course_unit}}</h5>
                                                    <p>Not Provided</p>
                                                    {{--
                                                        <div class="row">
                                                        <div class="col-lg-3 col-xs-4 m-bot-2"><img src="dist/img/img7.jpg" alt="user" class="img-responsive img-rounded"></div>
                                                        <div class="col-lg-3 col-xs-4 m-bot-2"><img src="dist/img/img8.jpg" alt="user" class="img-responsive img-rounded"></div>
                                                        <div class="col-lg-3 col-xs-4 m-bot-2"><img src="dist/img/img9.jpg" alt="user" class="img-responsive img-rounded"></div>
                                                        <div class="col-lg-3 col-xs-4 m-bot-2"><img src="dist/img/img10.jpg" alt="user" class="img-responsive img-rounded"></div>
                                                    </div>
                                                    <div class="like-comm m-t-1"> <a href="#">150 comment</a> <a href="#"><i class="fa fa-heart text-danger"></i> 25 Love</a> </div>
                                                    --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                                    <div class="card-body">
                                        <p class="text-white">{{$course->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="right">
                    <div class="scroll-sidebar text-left">
                        <p style="font-weight:bold;">Course Content</p>
                        <ul class="list-unstyled components">
                            <hr>
                            <li class="active">
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="caret"><span style="color:white;">{{$course->course_unit}}</span>  <span style="color:white; font-size:20px;"><i class=" fa fa-angle-down"></i></span></a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <div class="dw-user-box col-12">
                                            <div class="u-text">
                                            @foreach($all_Course_units as $course_unit)
                                                <div class="has-success">
                                                    <a href="/view-course/{{$course_unit->id}}" class="text-white">{{$course_unit->lecture}}</a> 
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                {{--
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class=""><span style="color:white;">{{$course->course_unit}}</span>
                                <span style="color:white; font-size:20px;"><i class="fa fa-angle-down"></i></span></a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <div class="dw-user-box col-12">
                                            <div class="u-text">
                                            @foreach($other_course_unit as $other_course_unit)
                                                <div class="has-success">
                                                    <a href="/view-course/{{$other_course_unit->id}}" class="text-white">{{$other_course_unit->lecture}}</a> 
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                --}}
                                </div>
                                </div>
                                </div>
                    </div>
                    <!-- End of Content Wrapper -->
                    </li>
                    </ul>
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @endforeach
        @include('layouts.javascript')
        <script src="{{asset('admin_pages/js/sidebarmenu.js')}}"></script>
        <!--Video plugins-->
        <script src="{{asset('admin_pages/resolution/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin_pages/resolution/blockui.min.js')}}"></script>
        </div>
        </div>
        </div>
    </body>
</html>