

@extends('Dashboard.inc.layout')

@section('content')

<div class="container bg-gray-200">

            <!--Section: Content-->
            <section class="text-center">

                <div class="row">
                    <a href="{{route('project.show' , $project->id)}}">
                    <h4 class="mb-5"><strong>{{$project->title}} images</strong></h4>
                </a>
                    <div class="row">
                        <div class="col-4 m-auto">
                            <div id="success"></div>
                            <div id="errors"></div>
                        </div>
                    </div>
                    @foreach ($project->images as $img )
                        <div id="{{$img->id}}" class="col-lg-4 col-md-12 mb-4">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="{{ Storage::disk('s3')->url($img->url) }}"
                                        class="img-fluid" />
                                        <div>
                                                <button class="btn btn-outline-danger mt-2 delete-image" data-route="{{route('image.delete' , $img->id)}}">Delete</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
            <!--Section: Content-->

</div>

{{-- Ajax Start --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/projectimage.js')}}"></script>

@endsection
