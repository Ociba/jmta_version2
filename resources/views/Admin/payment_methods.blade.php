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
                    <!-- Row -->
                    <div class="row">
                        <div class="col-12">
                            <h4 class="d-inline">Choose Payment Method</h4>
                            <p class="text-muted m-t-0"></p>
                            <div id="code1" class="collapse">
                                <div class="highlight">
                                    <pre>    <code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code>
</pre>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <!-- column -->
                                <div class="col-lg-3 col-md-6">
                                    <!-- Card -->
                                    <div class="card">
                                        <img class="card-img-top img-responsive" style="height:130px;" src="{{asset('admin_pages/payments_methods/mtn-airteel.jpg')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="/get-enrollment-form" class="btn btn-primary">Mobile money</a>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-lg-3 col-md-6">
                                    <!-- Card -->
                                    <div class="card">
                                        <img class="card-img-top img-responsive" style="height:130px;" src="{{asset('admin_pages/payments_methods/remit.png')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="/get-enrollment-form" class="btn btn-primary">Worlremit</a>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-lg-3 col-md-6">
                                    <!-- Card -->
                                    <div class="card">
                                        <img class="card-img-top img-responsive" src="{{asset('admin_pages/payments_methods/mastercard.png')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="/get-enrollment-form" class="btn btn-primary">mastercard</a>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-lg-3 col-md-6 img-responsive">
                                    <!-- Card -->
                                    <div class="card">
                                        <img class="card-img-top img-responsive" style="height:130px;" src="{{asset('admin_pages/payments_methods/visa.jpg')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="/get-enrollment-form" class="btn btn-primary">visa</a>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>
                                <!-- column -->
                            </div>
                            <!-- Row -->
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>