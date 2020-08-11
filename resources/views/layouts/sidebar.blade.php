<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap text-left ml-4 text-white"><h4> Bible Marathon</h4></li>
                @if(in_array('Can view revelation', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/create-new-revelation" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">My Revelations</span></a>
                </li>
                @endif
                @if(in_array('Can view Forum', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/get-forum" aria-expanded="false"><i class="fab fa-rocketchat"></i><span class="hide-menu">Forum</span></a>
                </li>
                @endif
                @if(in_array('Can view assessment form', auth()->user()->getUserPermisions()))
                <li class="nav-small-cap text-left ml-4 text-white"><h4>Assessment</h4> </li>
                <li>
                    <a class="waves-effect waves-dark text-white" href="/get-assessment-form" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Assessment Form</span></a>
                </li>
                @endif
                @if(in_array('Can view Admin', auth()->user()->getUserPermisions()))
                <li class="nav-small-cap text-left ml-4 text-white"> <h4>Admin</h4></li>
                @endif
                @if(in_array('Can view Bible marathon', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/get-all-bible-marathon-trainees" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Bible Marathon</span></a>
                </li>
                @endif
                @if(in_array('Can view trainees', auth()->user()->getUserPermisions()))
                <li>
                    <a class="has-arrow waves-effect waves-dark text-white" href="#" aria-expanded="false"><i class="icon-Windows-2"></i><span class="hide-menu">Trainees</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="text-white"><a href="/get-all-trainees">All Trainees</a></li>
                        <li li class="text-white"><a href="/get-new-trainees">New Trainees</a></li>
                        <li li class="text-white"><a href="/get-old-trainees">Old trainees</a></li>
                    </ul>
                </li>
                @endif
                <li>
                    <a class="has-arrow waves-effect waves-dark text-white" href="#" aria-expanded="false"><i class="icon-Windows-2"></i><span class="hide-menu"> Course</span></a>
                    <ul aria-expanded="false" class="collapse">
                @if(in_array('Can view course', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/get-courses" aria-expanded="false"><span class="hide-menu"> View Course</span></a>
                </li>
                @endif
                @if(in_array('Can add course', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/get-add-course" aria-expanded="false"><span class="hide-menu"> Add Course</span></a>
                </li>
                @endif
                </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark text-white" href="#" aria-expanded="false"><i class="icon-Windows-2"></i><span class="hide-menu">Assignment</span></a>
                    <ul aria-expanded="false" class="collapse">
                    @if(in_array('Can view assignments', auth()->user()->getUserPermisions()))
                    <li class="text-white"><a href="/get-assignments-uploaded">Assignments</a></li>
                    @endif
                    @if(in_array('Can view assignment results', auth()->user()->getUserPermisions()))
                        <li class="text-white"><a href="/get-assignments">Assignments Results </a></li>
                    @endif
                    @if(in_array('Can view assignment form', auth()->user()->getUserPermisions()))
                        <li li class="text-white"><a href="/get-assignment-form">Assignment Form</a></li>
                    @endif
                    @if(in_array('Can view assignment answer form', auth()->user()->getUserPermisions()))
                        <li class="text-white"><a href="/get-assignments-answers-form">Assignment Answers </a></li>
                        @endif
                    </ul>
                </li>
                @if(in_array('Can view account settings', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/get-account-settings" aria-expanded="false"><i class="sl-icon-settings"></i><span class="hide-menu">Account Settings</span></a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>