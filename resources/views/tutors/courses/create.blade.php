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
                        <li class="breadcrumb-item"><a href="{{route('tutor.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add new course</a></li>
                    </ol>
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Course Details</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{route('tutor_course_store')}}">
                            @csrf

                            @if(session('error'))
                                <div class="alert alert-danger">{{session('error')}}</div>
                            @endif

                            <div class="form-row">
                                <div class="col-sm-6 mb-2">
                                    <label for="title">Title</label>
                                    <input autofocus type="text" required class="form-control" name="title" id="title" value="{{old('title')}}">
                                    @error('title') <div class="text-danger">{{$message}}</div> @enderror
                                </div>

                                <div class="col-sm-6 mb-2 mt-sm-0">
                                    <label for="category">Category</label>
                                    <select required class="form-control" name="category_id" id="category">
                                        <option disabled selected>Select a category</option>

                                        @forelse($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('category_id') <div class="text-danger">{{$message}}</div> @enderror
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label for="title">Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">&#8358;</span>
                                        </div>
                                        <input type="text" required class="form-control" name="price" id="price" value="{{old('price')}}">
                                    </div>
                                    @error('price') <div class="text-danger">{{$message}}</div> @enderror
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label for="title">Image</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <input type="file" accept="image/*" required class="form-control" name="image" id="image" value="{{old('image')}}">
                                    </div>
                                    @error('image') <div class="text-danger">{{$message}}</div> @enderror
                                </div>

                                <div class="col-sm-12 mb-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input name="status" checked class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Make Course Visible
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 mb-2 col-xxl-12">
                                    <label for="description">Description</label>
                                    <textarea required value="{{old('description')}}" name="description" id="description"></textarea>
                                    @error('description') <div class="text-danger">{{$message}}</div> @enderror
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
