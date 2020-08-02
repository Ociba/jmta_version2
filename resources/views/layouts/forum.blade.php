<div class="row">
    <div class="col-12">
        <div class="card m-b-0">
            <!-- .chat-row -->
            <div class="chat-main-box">
                <!-- .chat-right-panel -->
                <div class="chat-right-aside">
                    <div class="chat-main-header">
                        <div class="p-20 b-b">
                            <h3 class="box-title">Forum</h3>
                        </div>
                    </div>
                    <div class="row">
                    <div class="chat-rbox col-lg-12">
                        <ul class="chat-list p-20">
                            @include('layouts.messages')
                            <!--chat Row -->
                            @foreach($chat_content as $chat)
                            @if($chat->user_id == 1)
                            <li class="reverse">
                                <div class="chat-content">
                                    <h5>{{ $chat->name }}</h5>
                                    <div class="box bg-light-inverse">{{$chat->message}}</div>
                                </div>
                                <div class="chat-img"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user" /></div>
                                <div class="chat-time">{{$chat->created_at->format('h:s a')}}</div>
                            </li>
                            @else
                            <li>
                                <div class="chat-img"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user" /></div>
                                <div class="chat-content">
                                    <h5>{{ $chat->name }}</h5>
                                    <div class="box bg-light-info">{{$chat->message}}</div>
                                </div>
                                <div class="chat-time">{{$chat->created_at->format('h:s a')}}</div>
                            </li>
                            <!--chat Row -->
                            @endif
                            @endforeach
                            <!--chat Row -->
                        </ul>
                    </div>
                    </div>
                    <div class="card-body b-t">
                    <form action="/chat-in-forum" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-8">
                                <textarea placeholder="Type your comment here" name="message" class="form-control b-0"></textarea>
                            </div>
                            <div class="col-4 text-right">
                                <button type="submit" class="btn btn-info btn-circle btn-lg"><i class="far fa-paper-plane"></i> </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- .chat-right-panel -->
                <div class="chat-left-aside">
                    <div class="open-panel"><i class="ti-angle-right"></i></div>
                    <div class="chat-left-inner">
                        <div class="p-20 b-b">
                            <h3 class="box-title">Upload Photo</h3>
                        </div>
                        <div class="col-lg-12 col-md-12">
                        <form action="/upload-chat-photo" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <input type="file" id="input-file-now-custom-1" class="dropify" name="photo"/>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-sm">Upload </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <!-- .chat-left-panel -->
            </div>
            <!-- /.chat-row -->
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul id="themecolors" class="m-t-20">
                <li><b>With Light sidebar</b></li>
                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
            </ul>
            <ul class="m-t-20 chatonline">
                <li><b>Chat option</b></li>
                <li>
                    <a href="javascript:void(0)"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="{{asset('trainees_images/'. auth()->user()->photo)}}" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>