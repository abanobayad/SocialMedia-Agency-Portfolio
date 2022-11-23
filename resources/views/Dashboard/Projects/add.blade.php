@extends('Dashboard.inc.layout')
@section('content')


                    <div class="col-lg-6 col-md-12 grid-margin stretch-card m-auto">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add New Project </h4>
                                <p class="card-description"> Enter info of the new project</p>
                                <form class="forms-sample" method="POST" action="{{route('project.doadd')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputName1">Title</label><span class="text-danger">*</span>
                                        <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="like: School Management System">
                                            @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                    <div class="mb-3">
                                        <label  class="form-label">Images</label> <span class="text-danger">*</span>
                                        <div class="col-12  mb-2">
                                            <div><input class="form-control"  type="file" name="images[]" multiple accept="image/png, image/jpg, image/jpeg" ></div>
                                            @error('images')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Video URL</label>
                                        <label class="text-muted">Please Enter The "src" value only of the embed code</label>
                                        <textarea type="url" name="video" class="form-control"  placeholder="like: School Management System">{{old('video')}}
                                        </textarea>
                                            @error('video')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">URL</label>
                                        <input type="url" name="url" class="form-control" value="{{old('url')}}" placeholder="like: School Management System">
                                            @error('url')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleTextarea1">Description</label><span class="text-danger">*</span>
                                        <textarea name="desc" class="form-control" id="exampleTextarea1" rows="4">{{old('desc')}}</textarea>
                                        @error('desc')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>



                                    <div class="mb-3 p-3 bg-gray-300">
                                        <label  class="form-label">Select Project Services</label><span class="text-danger">*</span>
                                        <div class="pb-3">
                                            @foreach ($services as $service)
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="services[]" class="form-check-input" value="{{$service->id}}" {{session()->has('selected_services') && in_array($service->id , session()->get('selected_services')) ? 'checked' : '' }}>
                                                        {{ $service->title }}
                                                    </label>

                                                </div>
                                            @endforeach
                                            @error('services')<span class="text-danger">{{$message}}</span>@enderror

                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-inverse-primary  me-2" style="float: right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>




    @endsection

