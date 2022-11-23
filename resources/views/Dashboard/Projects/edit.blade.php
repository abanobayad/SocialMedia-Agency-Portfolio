@extends('Dashboard.inc.layout')
@section('css')

@endsection
@section('content')
    <div class="col-lg-12 col-md-12 grid-margin stretch-card m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit / Project / {{ $project->title }} </h4>
                {{-- Start Edit Form Without Images --}}
                <form class="forms-sample" method="POST" action="{{ route('project.doedit') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $project->id }}">

                    <div class="form-group mt-5 mb-1">
                        <div class="row">
                            <div class="col-6">
                                <button style="float: right" type="button" class="btn btn-outline-primary mr-4" data-toggle="modal"
                                    data-target="#exampleModal" data-whatever="@mdo">Add New Images</button>
                            </div>

                            <div class="col-6">
                                <a href="{{route('image.edit' , $project->id)}}" class="btn btn-outline-warning">Edit Project Images</a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" value="{{ $project->title }}" class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">URL</label>
                        <input type="text" name="url" value="{{ $project->url }}" class="form-control">
                        @error('url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="exampleInputName1">Video URL</label>
                        <textarea type="text" name="video"  class="form-control">{{ $project->video_url }}</textarea>
                        @error('video')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea name="desc" class="form-control" id="exampleTextarea1" rows="4">{{ $project->desc }}</textarea>
                        @error('desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 p-3 bg-gray-300">
                        <label  class="form-label">Select Project Services</label><span class="text-danger">*</span>
                        <div class="pb-3">
                            @foreach ($services as $service)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="services[]" class="form-check-input" value="{{$service->id}}" {{ in_array($service->id , $selected_services) ? 'checked' : '' }}>
                                        {{ $service->title }}
                                    </label>

                                </div>
                            @endforeach
                            @error('services')<span class="text-danger">{{$message}}</span>@enderror

                        </div>
                    </div>

                    <button type="submit" class="btn btn-inverse-primary me-2" style="float: right">Submit</button>
                </form>
            </div>
                {{-- End Form --}}

                {{-- Modal start --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Images</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('imagep.doadd') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$project->id}}">
                                <div class="mb-3">
                                    <div class="col-12  mb-2">
                                        <div><input class="form-control" type="file" name="images[]"
                                                multiple accept="image/png, image/jpg, image/jpeg"></div>
                                        @error('images')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    </div>
                </div>
                {{-- Modal End --}}
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
@endsection
