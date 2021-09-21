@extends('tutors.layout.main')

@section('body')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Add New Course</h4>
                        <span class="ml-1">Enter the course details</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                    </ol>
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Row</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-sm-6 mt-2 mt-sm-0">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
