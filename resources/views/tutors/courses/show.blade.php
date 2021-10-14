@extends('tutors.layout.main')

@section('body')

    <div class="content-body">

        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>{{$course->title}}</h4>
                        <span class="ml-1">{{$course->category->category}}</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('tutor.course.index')}}">My Courses</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$course->title}}</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="email-left-box generic-width px-0 mb-5">
                                @if(session('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                @endif
                                <div class="p-0">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Course Section</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">New Course Section</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('tutor_course_section_store', $course->id)}}" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="section">Section Title</label>
                                                            <input class="form-control" type="text" name="section" id="section" value="{{old('section')}}">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="needed_points">Required Points</label>
                                                            <input class="form-control" required type="text" name="needed_points" id="needed_points" value="{{old('needed_points') ?: 0}}">
                                                            @error('needed_points') <div class="text-danger">{{$message}}</div> @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <button class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="intro-title d-flex justify-content-between">
                                    <h5>Course Sections</h5>
                                </div>
                                <div class="mail-list mt-4">
                                    <div id="accordion-three" class="accordion accordion-no-gutter accordion-header-bg">
                                        <div class="accordion__item">
                                            <div class="accordion__header" data-toggle="collapse" data-target="#no-gutter_collapseOne">
                                                <span class="accordion__header--text">Accordion Header One</span>
                                                <span class="accordion__header--indicator"></span>
                                            </div>
                                            <div id="no-gutter_collapseOne" class="collapse accordion__body show" data-parent="#accordion-three">
                                                <div class="accordion__body--text">
                                                    <ul class="">
                                                        <li class="p-1"><a href="">Morbi leo risus</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion__item">
                                            <div class="accordion__header collapsed" data-toggle="collapse" data-target="#no-gutter_collapseTwo">
                                                <span class="accordion__header--text">Accordion Header Two</span>
                                                <span class="accordion__header--indicator"></span>
                                            </div>
                                            <div id="no-gutter_collapseTwo" class="collapse accordion__body" data-parent="#accordion-three">
                                                <div class="accordion__body--text">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion__item">
                                            <div class="accordion__header collapsed" data-toggle="collapse" data-target="#no-gutter_collapseThree">
                                                <span class="accordion__header--text">Accordion Header Three</span>
                                                <span class="accordion__header--indicator"></span>
                                            </div>
                                            <div id="no-gutter_collapseThree" class="collapse accordion__body" data-parent="#accordion-three">
                                                <div class="accordion__body--text">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="right-box-padding">

                                            <div class="read-content">
                                                <div class="media pt-3 text-center">
                                                    <img class="mr-4 text-center img-fluid" alt="image" src="{{asset('storage/course_images/'.$course->image)}}">
                                                </div>
                                                <hr>
                                                <div class="media mb-4 mt-5">
                                                    <div class="media-body"><span class="pull-right">{{format_date($course->created_at)}}</span>
                                                        <h5 class="my-1 text-primary">{{$course->title}}</h5>
                                                        <p class="read-content-email">{{$course->category->category}}</p>
                                                    </div>
                                                </div>
                                                <div class="read-content-body">
                                                    <h4 class="mb-2">Description</h4>
                                                    {!! $course->description !!}
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button class="btn btn-primary btn-sl-sm mb-5" type="button">Send</button>
                                            </div>
                                        </div>
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
