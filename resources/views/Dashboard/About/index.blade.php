@extends('Dashboard.inc.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 m-auto col-md-12">
            <div class="card mb-3 pb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        @if ($about->image != null)
                        <img src="{{ Storage::disk('s3')->url($about->image) }}" style="object-fit: cover ; width: 20rem" class=""  alt="...">
                        @else
                        <h3 class="p-5 text-danger">No Image</h3>
                        @endif
                        @if ($about->cv != null)
                        <div class="row p-5 m-5">
                            <div class="col-12 text-center">
                                <a class="text-primary" href="{{ Storage::disk('s3')->url($about->cv) }}">
                                    <h5>Current Cv</h5>
                                </a>
                            </div>
                        </div>
                        @else
                        <h3 class="p-5 text-danger">No Cv</h3>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">About Me Info</h4>
                            <p class="card-text">Name : <span
                                    class="font-weight-bold text-success">{{ $about->name }}</span> </p>
                            <p class="card-text">Email : <span
                                    class="font-weight-bold text-success">{{ $about->email }}</span> </p>
                            <p class="card-text">Phone : <span
                                    class="font-weight-bold text-success">{{ $about->phone }}</span> </p>
                            <p class="card-text">Titles : <span
                                    class="font-weight-bold text-success">{{ $about->titles }}</span> </p>
                            <p class="card-text">Address : <span
                                    class="font-weight-bold text-success">{{ $about->address }}</span> </p>
                            <p class="card-text">Job Title : <span
                                    class="font-weight-bold text-success">{{ $about->JobTitle }}</span> </p>
                            <p class="card-text">Description : <span
                                    class="font-weight-bold text-success">{{ $about->desc }}</span> </p>
                            <div style="float: right">
                                <a href="{{ route('about.edit', $about->id) }}" class="btn btn-inverse-success ">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
