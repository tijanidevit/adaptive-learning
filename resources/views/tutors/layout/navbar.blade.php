<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
                <a href="{{route('tutor.dashboard')}}"><i class="icon icon-app-store"></i><span class="nav-text">Dashboard</span></a>
            </li>

            <li>
                <a href="{{route('tutor.dashboard')}}"><i class="ti-user"></i><span class="nav-text">Profile</span></a>
            </li>

{{--            <li class="nav-label">Courses</li>--}}
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="nav-text">Courses</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('tutor.profile')}}">View Your Courses</a></li>
                    <li><a href="{{route('tutor.add.course')}}">Add New Course</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-chart-bar-33"></i><span class="nav-text">Accounts</span></a>
                <ul aria-expanded="false">
                    <li><a href="chart-flot.html">Set Account Details</a></li>
                    <li><a href="chart-morris.html">View Earnings</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
