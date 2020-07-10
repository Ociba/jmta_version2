
<link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap/" />
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body b-l calender-sidebar">
                            @if(request()->route()->getName() == "My Revelations")
                            <a href="/create-new-revelation"><div id="calendar"></div></a>
                            @else
                            <a href="/get-revelations-on-this-day/1"><div id="calendar"></div></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin_pages/node_modules/moment/moment.js')}}"></script>
<script src="{{asset('admin_pages/node_modules/calendar/dist/fullcalendar.min.js')}}"></script>