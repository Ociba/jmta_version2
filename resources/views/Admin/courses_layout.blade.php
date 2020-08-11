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
                     <span class="text-white m-5">Kingdom Dynamics 101</span>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                        
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="left">
                                <video src="{{asset('videos/self discover lesson 1.mp4')}}" poster="initial_static_picture.jpg" controls>
                                </video>
                                <p class="font-weight-bold text-uppercase">This video introducing you to bible study marathon of 40 days ,hope you will enjoy it</p>
                                <hr>
                                <div class="info-box">
                                    <div class="card tab-style1"> 
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs profile-tab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">Overview</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Q & A</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Notes</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#announcements" role="tab">Announcements</a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                        <div class="card-body">
                                            <div class="row">
                                            <div class="col-lg-2">
                                                <div class="user-img pull-left"> <img src="dist/img/img3.jpg" class="img-circle img-responsive" alt="User Image"> </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="mail-contnet">
                                                <h5>Florence Douglas</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum raesent mauris nec.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum raesent mauris nec.</p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-xs-4 m-bot-2"><img src="dist/img/img7.jpg" alt="user" class="img-responsive img-rounded"></div>
                                                    <div class="col-lg-3 col-xs-4 m-bot-2"><img src="dist/img/img8.jpg" alt="user" class="img-responsive img-rounded"></div>
                                                    <div class="col-lg-3 col-xs-4 m-bot-2"><img src="dist/img/img9.jpg" alt="user" class="img-responsive img-rounded"></div>
                                                    <div class="col-lg-3 col-xs-4 m-bot-2"><img src="dist/img/img10.jpg" alt="user" class="img-responsive img-rounded"></div>
                                                </div>
                                                <div class="like-comm m-t-1"> <a href="#">150 comment</a> <a href="#"><i class="fa fa-heart text-danger"></i> 25 Love</a> </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!--second tab-->
                                        <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                                        <div class="card-body">
                                            <div class="row">
                                            <div class="col-lg-3 col-xs-6 b-r"> <strong>Full Name</strong> <br>
                                                <p class="text-muted">Florence Douglas</p>
                                            </div>
                                            <div class="col-lg-3 col-xs-6 b-r"> <strong>Mobile</strong> <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-lg-3 col-xs-6 b-r"> <strong>Email</strong> <br>
                                                <p class="text-muted">florencedouglas@admin.com</p>
                                            </div>
                                            </div>
                                            <hr>
                                            <p>Lorem Ipsum is simply dummy text of the printing vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                            <p>Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor feugiat. Aliquam efficitur feugiat accumsan. Nulla hendrerit cursus nisi nec mattis. </p>
                                            <h4 class="font-medium m-t-3">Skill Set</h4>
                                            <hr>
                                            <div>
                                            <h6 class="m-t-3">Wordpress <span class="pull-right">80%</span></h6>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h5 class="m-t-3">HTML 5 <span class="pull-right">90%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h5 class="m-t-3">jQuery <span class="pull-right">50%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h5 class="m-t-3">Photoshop <span class="pull-right">70%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="tab-pane" id="settings" role="tabpanel">
                                        <div class="card-body">
                                            <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                <input placeholder="Florence Douglas" class="form-control form-control-line" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                <input placeholder="florencedouglas@admin.com" class="form-control form-control-line" name="example-email" id="example-email" type="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                <input value="password" class="form-control form-control-line" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                <input placeholder="123 456 7890" class="form-control form-control-line" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                <select class="form-control form-control-line">
                                                    <option>London</option>
                                                    <option>India</option>
                                                    <option>Usa</option>
                                                    <option>Canada</option>
                                                    <option>Thailand</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                        <div class="tab-pane" id="announcements" role="tabpanel">
                                        <div class="card-body">
                                            <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                <input placeholder="Florence Douglas" class="form-control form-control-line" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                <input placeholder="florencedouglas@admin.com" class="form-control form-control-line" name="example-email" id="example-email" type="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                <input value="password" class="form-control form-control-line" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                <input placeholder="123 456 7890" class="form-control form-control-line" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                <select class="form-control form-control-line">
                                                    <option>London</option>
                                                    <option>India</option>
                                                    <option>Usa</option>
                                                    <option>Canada</option>
                                                    <option>Thailand</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                            </form>
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
                                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span style="color:black;">Introduction To Kingdom Dynamics</span></a>
                                    <ul class="collapse list-unstyled" id="pageSubmenu">
                                        <li>
                                            <div class="dw-user-box col-12">
                                                <div class="u-text">
                                                    <div class="has-success">
                                                        <div class="radio">
                                                            <label>
                                                            <input id="checkboxSuccess1" value="option1" type="checkbox">
                                                            Julius Ssemakula </label>
                                                        </div>
                                                    <div class="has-success">
                                                        <div class="radio">
                                                            <label>
                                                            <input id="checkboxSuccess2" value="option2" type="checkbox">
                                                            James Ociba</label>
                                                        </div>
                                                    </div>
                                                    <div class="has-success">
                                                        <div class="radio">
                                                            <label>
                                                            <input id="checkboxSuccess3" value="option3" type="checkbox">
                                                            Aaron Ojinga Ociba</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span style="color:black;">Deeper Understanding of kingdom Dynamics</span></a>
                                    <ul class="collapse list-unstyled m-2" id="homeSubmenu">
                                        <li>
                                            <div class="dw-user-box col-12">
                                                <div class="u-text">
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            Julius Ssemakula </label>
                                                        </div>
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            James Ociba</label>
                                                        </div>
                                                    </div>
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            Aaron Ojinga Ociba</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <a href="#chapter3Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span style="color:black;">Analysing more on Kingdom Dynamics</span></a>
                                    <ul class="collapse list-unstyled m-2" id="chapter3Submenu">
                                        <li>
                                            <div class="dw-user-box col-12">
                                                <div class="u-text">
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            Julius Ssemakula </label>
                                                        </div>
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            James Ociba</label>
                                                        </div>
                                                    </div>
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            Aaron Ojinga Ociba</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <a href="#chapter4Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span style="color:black;">Summary on the Kingdom Dynamics</span></a>
                                    <ul class="collapse list-unstyled m-2" id="chapter4Submenu">
                                        <li>
                                            <div class="dw-user-box col-12">
                                                <div class="u-text">
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            Julius Ssemakula </label>
                                                        </div>
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            James Ociba</label>
                                                        </div>
                                                    </div>
                                                    <div class="has-success">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input id="checkboxSuccess" value="option1" type="checkbox">
                                                            Aaron Ojinga Ociba</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
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
        @include('layouts.javascript')
        <script src="{{asset('admin_pages/js/sidebarmenu.js')}}"></script>
    </body>
</html>