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
                    <div class="info-box"> 
                        <!-- Main content -->
                        @foreach($individual_enrollment_information as $enrollment)
                        <div class="invoice text-white"> 
                        <!-- title row -->
                        <div class="row">
                            <div class="col-lg-12 m-b-3">
                            <h3 class="text-white"> {{$enrollment->course_name}} <span class="pull-right">{{$enrollment->created_at}}</span> </h3>
                            </div>
                            <!-- /.col --> 
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info m-b-3">
                            <div class="col-sm-4 invoice-col">
                            <address>
                            <strong>Nationality: {{$enrollment->nationality}}</strong><br>
                            State: {{$enrollment->state}}<br>
                            Country: {{$enrollment->country}}<br>
                            Phone: {{$enrollment->phone_number}}<br>
                            Email: {{$enrollment->email}}
                            </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                            <address>
                            <strong>Gender: {{$enrollment->gender}}</strong><br>
                            DOB: {{$enrollment->date_of_birth}}<br>
                            City: {{$enrollment->city}}
                            <br>
                            Denomination: {{$enrollment->denomination}}<br>
                            Ministry: {{$enrollment->ministry}}
                            </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col"> <b>Local Church: {{$enrollment->local_church}}</b><br>
                            Marital Status: {{$enrollment->marital_status}}<br>
                            <b>Profession:</b> {{$enrollment->profession}}<br>
                            <b>Occupation:</b> {{$enrollment->occupation}}<br>
                            <b>Attendance Status:</b> {{$enrollment->attendance_status}} </div>
                            <!-- /.col --> 
                        </div>
                        <!-- /.row --> 
                        
                        <!-- Table row -->
                        <div class="row ">
                            <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead class="text-white">
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Payment Method</th>
                                    <th>Photo</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$enrollment->last_name}} {{$enrollment->first_name}}</td>
                                    <td>{{$enrollment->created_at->format('d-m-Y')}}</td>
                                    <td>{{$enrollment->payment_method}}</td>
                                    <td><img src="{{ asset('enrollment-photos/'.$enrollment->passport_photo)}}" style="width:50px; height:50px;"></td>
                                    <td>{{$enrollment->payment_status}}</td>
                                    <td><a href="/change-enrollment-payment-status/{{$enrollment->id}}"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            <!-- /.col --> 
                        </div>
                        <!-- /.row -->
                        {{--
                        <div class="row m-t-3"> 
                            <!-- accepted payments column -->
                            <div class="col-lg-6">
                            <p class="lead">Payment Methods:</p>
                            <img src="dist/img/mastercard.png" alt="Visa"> <img src="dist/img/mastercard.png" alt="Mastercard"> <img src="dist/img/american-express.png" alt="American Express"> <img src="dist/img/paypal2.png" alt="Paypal">
                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"> Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                                dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-lg-6">
                            <p class="lead">Amount Due 2/22/2014</p>
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>$250.30</td>
                                </tr>
                                <tr>
                                    <th>Tax (9.3%)</th>
                                    <td>$10.34</td>
                                </tr>
                                <tr>
                                    <th>Shipping:</th>
                                    <td>$5.80</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>$265.24</td>
                                </tr>
                                </table>
                            </div>
                            </div>
                            <!-- /.col --> 
                        </div>
                        <!-- /.row --> 
                        
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-lg-12">
                            <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment </button>
                            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"> <i class="fa fa-download"></i> Generate PDF </button>
                            </div>
                        </div>
                        --}}
                        </div>
                        @endforeach
                        <!-- /.content --> 
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>