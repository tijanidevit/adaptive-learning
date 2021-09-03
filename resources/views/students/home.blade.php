@extends('students.layout.main')

@section('title') Homepage @endsection

@section('body')
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="section3125">
                        <h4 class="item_title">Live Streams</h4>
                        <a href="live_streams.html" class="see150">See all</a>
                        <div class="la5lo1">
                            <div class="owl-carousel live_stream owl-theme">
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-1.jpg')}}" alt="">
                                            <h4>John Doe</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-2.jpg')}}" alt="">
                                            <h4>Jassica</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-9.jpg')}}" alt="">
                                            <h4>Edututs+</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-3.jpg')}}" alt="">
                                            <h4>Joginder Singh</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-4.jpg')}}" alt="">
                                            <h4>Zoena</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-5.jpg')}}" alt="">
                                            <h4>Albert Dua</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-6.jpg')}}" alt="">
                                            <h4>Ridhima</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-7.jpg')}}" alt="">
                                            <h4>Amritpal</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="live_output.html" class="stream_bg">
                                            <img src="{{asset('assets/images/left-imgs/img-8.jpg')}}" alt="">
                                            <h4>Jimmy</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section3125 mt-10">
                        <h4 class="item_title">Featured Courses</h4>
                        <a href="#" class="see150">See all</a>

                        <div class="_14d25">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-1.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Web Development | Python</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">John Doe</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-2.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    28 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">5M views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
                                            <a href="#" class="crse-cate">Development | JavaScript</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Jassica William</a></p>
                                                <div class="prce142">$5</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-20.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    21 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">200 Views</span>
                                                <span class="vdt14">4 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">WordPress Development - Themes, Plugins &amp; Gutenberg</a>
                                            <a href="#" class="crse-cate">Design | Wordpress</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Joy Dua</a></p>
                                                <div class="prce142">$14</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-4.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    1 hour
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">153k views</span>
                                                <span class="vdt14">3 months ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete Digital Marketing Course - 12 Courses in 1</a>
                                            <a href="#" class="crse-cate">Digital Marketing | Marketing</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Poonam Verma</a></p>
                                                <div class="prce142">$12</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-13.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    30 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">20 Views</span>
                                                <span class="vdt14">1 day ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete Node.js Developer Course (3rd Edition)</a>
                                            <a href="#" class="crse-cate">Development | Node.js</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">John Doe</a></p>
                                                <div class="prce142">$3</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-7.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    5.4 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">WordPress for Beginners: Create a Website Step by Step</a>
                                            <a href="#" class="crse-cate">Design | Wordpress</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Sabnam SIngh</a></p>
                                                <div class="prce142">$18</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-8.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    23 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">196k views</span>
                                                <span class="vdt14">1 month ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">CSS - The Complete Guide 2020 (incl. Flexbox, Grid &amp; Sass)</a>
                                            <a href="#" class="crse-cate">Design | CSS</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Jashanpreet Singh</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="#" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-16.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    22 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">11 Views</span>
                                                <span class="vdt14">5 Days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">Vue JS 2 - The Complete Guide (incl. Vue Router &amp; Vuex)</a>
                                            <a href="#" class="crse-cate">Development | Vue JS</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Manreet Kaur</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="main-loader mt-50">
                                        <div class="spinner">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3125 mt-30">
                        <h4 class="item_title">Newest Courses</h4>
                        <a href="#" class="see150">See all</a>

                        <div class="_14d25">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-1.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Web Development | Python</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">John Doe</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-2.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    28 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">5M views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
                                            <a href="#" class="crse-cate">Development | JavaScript</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Jassica William</a></p>
                                                <div class="prce142">$5</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-20.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    21 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">200 Views</span>
                                                <span class="vdt14">4 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">WordPress Development - Themes, Plugins &amp; Gutenberg</a>
                                            <a href="#" class="crse-cate">Design | Wordpress</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Joy Dua</a></p>
                                                <div class="prce142">$14</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-4.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    1 hour
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">153k views</span>
                                                <span class="vdt14">3 months ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete Digital Marketing Course - 12 Courses in 1</a>
                                            <a href="#" class="crse-cate">Digital Marketing | Marketing</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Poonam Verma</a></p>
                                                <div class="prce142">$12</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-13.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    30 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">20 Views</span>
                                                <span class="vdt14">1 day ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete Node.js Developer Course (3rd Edition)</a>
                                            <a href="#" class="crse-cate">Development | Node.js</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">John Doe</a></p>
                                                <div class="prce142">$3</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-7.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    5.4 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">WordPress for Beginners: Create a Website Step by Step</a>
                                            <a href="#" class="crse-cate">Design | Wordpress</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Sabnam SIngh</a></p>
                                                <div class="prce142">$18</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-8.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    23 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">196k views</span>
                                                <span class="vdt14">1 month ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">CSS - The Complete Guide 2020 (incl. Flexbox, Grid &amp; Sass)</a>
                                            <a href="#" class="crse-cate">Design | CSS</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Jashanpreet Singh</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="#" class="fcrse_img">
                                            <img src="{{asset('assets/images/courses/img-16.jpg')}}" alt="">
                                            <div class="course-overlay">
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    22 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">11 Views</span>
                                                <span class="vdt14">5 Days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">Vue JS 2 - The Complete Guide (incl. Vue Router &amp; Vuex)</a>
                                            <a href="#" class="crse-cate">Development | Vue JS</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Manreet Kaur</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="main-loader mt-50">
                                        <div class="spinner">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3126">
                        <div class="row">
                            <div class="col-xl-3 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-history'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Go at your own pace</h4>
                                        <p>Enjoy lifetime access to courses on Edututs+'s website</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-user-check'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Learn from experts</h4>
                                        <p>Select from top instructors around the world</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-play-circle'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Video courses on all topic</h4>
                                        <p>Build your library for your career and personal growth</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-presentation-play'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Over 100,000 interesting online courses</h4>
                                        <p>Explore a variety of fresh topics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
