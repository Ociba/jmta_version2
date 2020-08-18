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
                    <form action="/create-my-revelation" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="Revelation one" style="color:white">Revelation one</label>
                            <input type="text" name="revelation_one" id="" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="Revelation Two" style="color:white">Revelation two</label>
                            <input type="text" name="revelation_two" id="" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="Revelation Three" style="color:white">Revelation three</label>
                            <input type="text" name="revelation_three" id="" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="Revelation Four" style="color:white">Revelation four</label>
                            <input type="text" name="revelation_four" id="" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="Revelation Five" style="color:white">Revelation five</label>
                            <input type="text" name="revelation_five" id="" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="Revelation Six" style="color:white">Revelation six</label>
                            <input type="text" name="revelation_six" id="" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="Revelation Seven" style="color:white">Revelation seven</label>
                            <input type="text" name="revelation_seven" id="" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="Day" style="color:white">Day</label>
                            <input type="number" name="day_number" id="" class="form-control" required>
                        </div>
                        <div class="col-lg-6"><br>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </div>
                </form>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>