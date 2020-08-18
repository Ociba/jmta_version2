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
                                <form class="mt-4" action="/send-assignment-answers" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group has-success">
                                        <label class="control-label">Assignment</label>
                                            <select class="form-control custom-select" name="assignment">
                                            @foreach($assignment as $assignments)
                                                <option value="{{$assignments->id}}">{{$assignments->assignment}}</option>
                                            @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Upload Assignment Answer File</label>
                                        <input type="file" class="form-control" id="exampleInputPassword1" name="answer" placeholder="" required>
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