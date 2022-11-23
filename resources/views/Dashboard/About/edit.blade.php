@extends('Dashboard.inc.layout')

@section('content')


<div class="row">
                    <div class="col-lg-6 col-md-12 grid-margin stretch-card m-auto m-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit About Me Info</h4>
                                <p class="card-description"> Edit About information </p>
                                <form class="forms-sample" method="POST" action="{{route('about.doedit')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$about->id}}">

                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" value="{{ $about->name }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" name="email" value="{{ $about->email }}"
                                            class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ $about->phone }}"
                                            class="form-control">
                                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{ $about->address }}"
                                            class="form-control">
                                            @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" name="JobTitle" value="{{ $about->JobTitle }}"
                                            class="form-control">
                                            @error('JobTitle')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Titles</label>
                                        <div class="text-muted">Please Enter Titles Spereated by ","</div>
                                        <input type="text" name="titles" value="{{ $about->titles }}"
                                            class="form-control">
                                            @error('titles')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="mb-3">
                                        @if ($about->image != null)
                                        <label  class="form-label">Current Image</label>
                                        <div class="col-12  mb-2">
                                            <img  style="object-fit:cover ;width: 100px ; height: 100px;" src="{{Storage::disk('s3')->url($about->image)}}" alt="{{$about->name}}" class="mb-3 col-12">
                                            @else
                                                <h6>No image</h6>
                                        </div>
                                        @endif
                                                <div>
                                                    <div class="text-secodary">
                                                        "Please The Put Resolution like: "1920px X 1280px"
                                                    </div>
                                                    <input class="form-control"  type="file" name="image" accept="image/png, image/jpg, image/jpeg"  value="{{$about->name}}">
                                                </div>
                                            @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                    <div class="form-group">
                                        <label  class="form-label">Upload CV</label>
                                                <input class="form-control"  type="file" name="cv" accept=".pdf">
                                            @error('cv')<span class="text-danger">{{ $message }}</span>@enderror

                                    </div>


                                    <div class="form-group">
                                        <label  class="form-label">Upload Proposal</label>
                                                <input class="form-control"  type="file" name="pro" accept=".pdf">
                                            @error('pro')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>




                                    <div class="form-group">
                                        <label for="exampleTextarea1">Description</label>
                                        <textarea name="description" class="form-control" id="exampleTextarea1" rows="4">{{$about->desc}}</textarea>
                                        @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                    <button type="submit" class="btn btn-dark me-2" style="float: right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    @endsection

