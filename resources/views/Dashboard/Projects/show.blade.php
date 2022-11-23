@extends('Dashboard.inc.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 m-auto col-md-12">
            <div class="card mb-3 pb-3">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body m-auto">
                            <h4 class="card-title">Show / {{ $project->title }}</h4>
                            <div class="row ">
                                <div class="col-6">
                                    <p class="card-text">Title : <span
                                            class="font-weight-bold text-primary">{{ $project->title }}</span> </p>
                                    <p class="card-text">Desctription : <span
                                            class="font-weight-bold text-primary">{{ $project->desc }}</span> </p>
                                    <p class="card-text">URL : <a href="{{ $project->url }}" target="_blank"
                                            class="font-weight-bold text-primary"> <i class="fa fa-link"> Click Here</i></a>
                                    </p>
                                    <div>
                                        <p class="card-text">Video : </p>
                                        <p>url : {{ $project->video_url }}</p>
                                        <iframe width="480" height="250" src="{{ $project->video_url }}"
                                            title="{{ $project->title }}" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class=" mt-2">
    <div class="row">
        <div class="col-12">
        <p class="text-bold">Project Images : </p>
        <div class="row bg-gray-300 rounded">
            @foreach ($images as $image)
                <div class="col-4">
                    <a target="_blank" href="{{ Storage::disk('s3')->url($image->url) }}">
                        <img class="card-img p-2" style="width: 250; height: 150px ; object-fit:cover" alt="{{ $project->title }}"
                            src="{{ Storage::disk('s3')->url($image->url) }}">
                    </a>
                </div>
            @endforeach
        </div>
    <div  style="float: right">
        <a href="{{ route('project.edit', $project->id) }}" class="btn btn-inverse-primary ">Edit</a>
    </div>
    </div>
</div>
@endsection
