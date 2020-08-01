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
                <div class="container-fluid">   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>shalom, shalom, </strong> we are glad to have you for the bible marathon
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    @include('layouts.breadcrumbs')
                    @include('layouts.calendar')
                </div>
                @include('layouts.footer')
                {{-- @include('layouts.javascript') --}}
            </div>
        </div>
    </body>
</html>