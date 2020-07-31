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
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 bg-light" id="left">
                                <video src="{{asset('videos/self discover lesson 1.mp4')}}" poster="initial_static_picture.jpg" controls>
                                </video>
                                <p class="font-weight-bold text-uppercase">This video introducing you to bible study marathon of 40 days ,hope you will enjoy it</p>
                                <p class="">176,438 views• &nbsp;Nov 20, 2019 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <i class="fa fa-thumbs-up" aria-hidden="true"> 544</i> &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-thumbs-down" aria-hidden="true"> 128</i> &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-share"> Share</i></p>
                                <hr>
                                <div style="font-family: Times New Roman;">
                                    <img style="width:30px; height:30px; border-radius:50%;" src="{{asset('admin_pages/images/users/fish.jpg')}}">
                                    Unique Nigerian Movies LatestI Trending MOVIES &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button class="btn btn-danger pull-right">Subscribe</button>
                                    <span class="text-success">363k subscribers</span>
                                </div>
                                <hr>
                                <p>33 Comments</p>
                                <p>
                                    <img style="width:70px; height:70px; border-radius:50%;" src="{{asset('admin_pages/images/users/ociba.jpg')}}">
                                <form class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" value="add public comment">
                                    <button type="submit" class="btn btn-info">send</button>
                                </form>
                                </p>
                                <div>
                                    <img style="width:50px; height:50px; border-radius:50%;" src="{{asset('admin_pages/images/users/ociba.jpg')}}">  
                                    wale olabowale <span class="text-success">1 day ago</span> 
                                    <p>In a sense this is wrong u don't tell stranger to look after a minor</p>
                                    <img style="width:50px; height:50px; border-radius:50%;" src="{{asset('admin_pages/images/users/ociba.jpg')}}">  
                                    wale olabowale <span class="text-success">1 day ago</span> 
                                    <p>In a sense this is wrong u don't tell stranger to look after a minor</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" id="right">
                                <hr>
                                <p style="text-align:left;">Up next</p>
                                @foreach($course_unit as $course)
                                <div class="tool-card">
                                <video style="width:120px; height:70px;" src="{{asset('videos/'.$course->course_unit)}}" controls="controls" preload="metadata">
                                </video>
                                    <span class="float-right">
                                     <p class="font-weight-bold text-left">{{$course->course_lectuere_name}}</p>
                                    <p class="text-left">{{$course->description}}</p>
                                    </span>
                                </div>
                                <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End of Content Wrapper -->
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>