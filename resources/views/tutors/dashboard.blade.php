@extends('tutors.layout.main')

@section('body')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi {{$user->first_name}}, welcome back!</h4>
                        <p class="mb-0">Welcome to your dashboard</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="ti-money text-success border-success"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Balance (&#8358;)</div>
                                <div class="stat-digit">{{$tutor->balance}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="ti-user text-primary border-primary"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Students</div>
                                <div class="stat-digit">{{$total_students}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="ti-layout-grid2 text-pink border-pink"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Courses</div>
                                <div class="stat-digit">{{$total_courses}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="ti-link text-danger border-danger"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Withdrawals</div>
                                <div class="stat-digit">{{$total_cashout}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recently Added Courses</h4>
                        </div>
                        <div class="row">
                            @forelse($latest_courses as $course)
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <div class="bootstrap-media">
                                            <div class="media mt-3">
                                                <img class="mr-3 img-fluid" src="{{'storage/course_images/'}}" alt="{{$course->title}}">
                                                <div class="media-body">
                                                    <h5 class="mt-0">{{$course->title}}</h5>
                                                    {{substr($course->description,0,120)}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <p>You have not added any course yet. Add a new course <a href="{{route('tutor.add.course')}}">Here</a></p>
                                        </div>
                                    </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="year-calendar"></div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
            </div>
        </div>
    </div>

@endsection
