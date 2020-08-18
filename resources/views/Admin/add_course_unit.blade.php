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
                    @include('layouts.messages')
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="mt-4" action="/create-course-unit" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label class="text-white" for="exampleInputPassword1">course unit</label>
                                        <input type="text" class="form-control"  name="course_unit" placeholder="" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">course</label> 
                                            <select class="form-control custom-select" name="course_name" required>
                                            @foreach($course as $courses)
                                                <option value="{{$courses->id}}">{{$courses->course_name}}</option>
                                            @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="exampleInputPassword1">Course Description</label>
                                        <input type="text" class="form-control"  name="description" placeholder="" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                            <label class="text-white" for="wphoneNumber2">Attach Video :</label>
                                            <input type="file" class="form-control" name="video" id="wphoneumber2" required> 
                                        </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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