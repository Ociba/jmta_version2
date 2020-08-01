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
                            @foreach($edit_assignment_answers_form as $add_mark)
                                <form class="mt-4" action="/add-marks/{{$add_mark->id}}" method="get">
                                @csrf
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Add mark</label>
                                        <input type="text" class="form-control"  name="mark" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            @endforeach
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