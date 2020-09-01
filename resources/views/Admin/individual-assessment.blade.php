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
                    <div class="col-12">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-white">{{ request()->route()->getName() }}</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40 text-white">
                            <table id="example23"
                                class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-white">QN.One</th>
                                        <th class="text-white">QN.Two</th>
                                        <th class="text-white">QN.If</th>
                                        <th class="text-white">QN.Three</th>
                                        <th class="text-white">QN.Four</th>
                                        <th class="text-white">QN.Five</th>
                                        <th class="text-white">QN.Six</th>
                                        <th class="text-white">QN. One</th>
                                        <th class="text-white">QN. Two</th>
                                        <th class="text-white">QN. Three</th>
                                        <th class="text-white">QN. Four</th>
                                        <th class="text-white">QN. Eight</th>
                                        <th class="text-white">QN. Nine</th>
                                        <th class="text-white">QN. Ten</th>
                                        <th class="text-white">QN. Eleven</th>
                                        <th class="text-white">QN. Twelve</th>
                                        <th class="text-white">QN. Thirteen</th>
                                        <th class="text-white">QN. Fourteen</th>
                                        <th class="text-white">QN. Fifteen</th>
                                        <th class="text-white">QN. Sixteen</th>
                                        <th class="text-white">QN. QN.teen</th>
                                        <th class="text-white">QN. Eighteen</th>
                                        <th class="text-white">QN. Nineteen</th>
                                        <th class="text-white">QN. Twenty</th>
                                        <th class="text-white">Video Recording</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($individual_assessment_answers as $individual)
                                    <tr class="font-weight-bold">
                                        <td>{{$individual->question_one}}</td>
                                        <td>{{ $individual->question_two}}</td>
                                        <td>{{ $individual->question_if}}</td>
                                        <td>{{$individual->question_three}}</td>
                                        <td>{{$individual->question_four}}</td>
                                        <td>{{$individual->question_five}}</td>
                                        <td>{{$individual->question_six}}</td>
                                        <td>{{$individual->question_one}}</td>
                                        <td>{{$individual->question_two}}</td>
                                        <td>{{$individual->question_three}}</td>
                                        <td>{{$individual->question_four}}</td>
                                        <td>{{$individual->question_eight}}</td>
                                        <td>{{$individual->question_nine}}</td>
                                        <td>{{ $individual->question_ten}}</td>
                                        <td>{{$individual->question_eleven}}</td>
                                        <td>{{$individual->question_twelve}}</td>
                                        <td>{{$individual->question_thirteen}}</td>
                                        <td>{{$individual->question_fourteen}}</td>
                                        <td>{{$individual->question_fifteen}}</td>
                                        <td>{{$individual->question_sixteen}}</td>
                                        <td>{{$individual->question_seventeen}}</td>
                                        <td>{{$individual->question_eighteen}}</td>
                                        <td>{{$individual->question_nineteen}}</td>
                                        <td>{{$individual->question_twenty}}</td>
                                        <td class="card-img embed-responsive embed-responsive-16by9 mb-3">
                                        {{--<video src="{{asset('marathon-videos/'.$individual->video_recoding)}}" poster="" controls>
                                        </video>
                                        --}}
                                            <iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" width="50" height="50" src="{{asset('marathon-videos/'.$individual->video_recording)}}" webkitallowfullscreen=""></iframe>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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