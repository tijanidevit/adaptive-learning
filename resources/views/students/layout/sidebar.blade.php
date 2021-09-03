<nav class="vertical_nav">
    <div class="left_section menu_left" id="js-menu">
        <div class="left_section">
            <ul>
                <li class="menu--item">
                    <a href="{{route('student_home')}}" class="menu--link active" title="Home">
                        <i class='uil uil-home-alt menu--icon'></i>
                        <span class="menu--label">Home</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="live_streams.html" class="menu--link" title="Live Streams">
                        <i class='uil uil-kayak menu--icon'></i>
                        <span class="menu--label">My Courses</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="explore.html" class="menu--link" title="Explore">
                        <i class='uil uil-search menu--icon'></i>
                        <span class="menu--label">All Courses</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="explore.html" class="menu--link" title="Explore">
                        <i class='uil uil-search menu--icon'></i>
                        <span class="menu--label">My Certificates</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="explore.html" class="menu--link" title="Explore">
                        <i class='uil uil-search menu--icon'></i>
                        <span class="menu--label">Discussions</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="left_section">
            <h6 class="left_title">SUBSCRIPTIONS</h6>
            <ul>
                <li class="menu--item">
                    <a href="instructor_profile_view.html" class="menu--link user_img">
                        <img src="{{asset('assets/images/left-imgs/img-1.jpg')}}" alt="">
                        Rock Smith
                        <div class="alrt_dot"></div>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="instructor_profile_view.html" class="menu--link user_img">
                        <img src="{{asset('assets/images/left-imgs/img-2.jpg')}}" alt="">
                        Jassica William
                    </a>
                    <div class="alrt_dot"></div>
                </li>
                <li class="menu--item">
                    <a href="all_instructor.html" class="menu--link" title="Browse Instructors">
                        <i class='uil uil-plus-circle menu--icon'></i>
                        <span class="menu--label">Browse Instructors</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="left_section pt-2">
            <ul>
                <li class="menu--item">
                    <a href="setting.html" class="menu--link" title="Setting">
                        <i class='uil uil-cog menu--icon'></i>
                        <span class="menu--label">Setting</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="help.html" class="menu--link" title="Help">
                        <i class='uil uil-question-circle menu--icon'></i>
                        <span class="menu--label">Help</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="report_history.html" class="menu--link" title="Report History">
                        <i class='uil uil-windsock menu--icon'></i>
                        <span class="menu--label">Report History</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="feedback.html" class="menu--link" title="Send Feedback">
                        <i class='uil uil-comment-alt-exclamation menu--icon'></i>
                        <span class="menu--label">Send Feedback</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="left_footer">
            <ul>
                <li><a href="about_us.html">About</a></li>
                <li><a href="press.html">Press</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="coming_soon.html">Advertise</a></li>
                <li><a href="coming_soon.html">Developers</a></li>
                <li><a href="terms_of_use.html">Copyright</a></li>
                <li><a href="terms_of_use.html">Privacy Policy</a></li>
                <li><a href="terms_of_use.html">Terms</a></li>
            </ul>
            <div class="left_footer_content">
                <p>© {{date('Y')}} <strong>Cursus</strong>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</nav>
