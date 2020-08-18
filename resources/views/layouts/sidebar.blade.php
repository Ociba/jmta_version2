<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(in_array('Can view dashboard', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/dashboard" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                @endif
                @if(in_array('Can view Enrolment details', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/get-enrolment-details" aria-expanded="false"><i class="fa fa-info-circle"></i><span class="hide-menu">Enrolment Information</span></a>
                </li>
                @endif
                <li>
                <a class="has-arrow waves-effect waves-dark text-white" href="#" aria-expanded="false"><i class="fa fa-folder-open-o"></i><span class="hide-menu">Revelations</span></a>
                <ul aria-expanded="false" class="collapse">
                @if(in_array('Can view revelation form', auth()->user()->getUserPermisions()))
                <li class="text-white"><a href="/create-new-revelation">Revelations form</a></li>
                @endif
                @if(in_array('Can view all revelations', auth()->user()->getUserPermisions()))
                <li class="text-white"><a href="/get-all-bible-marathon-trainees">All Revelations</a></li>
                @endif
                @if(in_array('Can view my revelations', auth()->user()->getUserPermisions()))
                <li class="text-white"><a href="/get-my-revelations/{trainee_id}">My Revelations</a></li>
                @endif
                </ul>
                </li>
                @if(in_array('Can view Forum', auth()->user()->getUserPermisions()))
                <li>
                    <a class="waves-effect waves-dark text-white" href="/get-forum" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="hide-menu">Forum</span></a>
                </li>
                @endif

                <li>
                <a class="has-arrow waves-effect waves-dark text-white" href="#" aria-expanded="false"><i class="fa fa-edit"></i><span class="hide-menu">Assessment</span></a>
                <ul aria-expanded="false" class="collapse">
                <li class="text-white"><a href="/get-assessment-form/{trainee_id}">Assessment Form</a></li>
                @if(in_array('Can view assessment Answers', auth()->user()->getUserPermisions()))
                <li class="text-white"><a href="/get-assessment-answers">Assessment Answers</a></li>
                @endif
                @if(in_array('Can view my assessment Answers', auth()->user()->getUserPermisions()))
                <li class="text-white"><a href="/get-my-assessment-answers/{trainee_id}">My Assessment Answers</a></li>
                @endif
                </ul>
                </li>

                @if(in_array('Can view Admin', auth()->user()->getUserPermisions()))
                {{--<li class="nav-small-cap text-left ml-4 text-white"> <h4>Admin</h4></li>--}}
                @endif
                @if(in_array('Can view trainees', auth()->user()->getUserPermisions()))
                <li>
                    <a class="has-arrow waves-effect waves-dark text-white" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Trainees</span></a>
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
                @if(in_array('Can add course Units', auth()->user()->getUserPermisions()))
                <li>
                <a class="waves-effect waves-dark text-white" href="/add-course-units" aria-expanded="false"><span class="hide-menu"> Add Course Units</span></a>
                </li>
                @endif
                </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark text-white" href="#" aria-expanded="false"><i class="fa fa-files-o"></i><span class="hide-menu">Assignment</span></a>
                    <ul aria-expanded="false" class="collapse">
                    @if(in_array('Can view assignments', auth()->user()->getUserPermisions()))
                    <li class="text-white"><a href="/get-assignments-uploaded">Assignments</a></li>
                    @endif
                    @if(in_array('Can view assignment results', auth()->user()->getUserPermisions()))
                        <li class="text-white"><a href="/get-assignments">Assignments Results </a></li>
                    @endif
                    @if(in_array('Can view my assignment results', auth()->user()->getUserPermisions()))
                        <li class="text-white"><a href="/get-my-assignments-results/{user_id}">My Assignments Results </a></li>
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