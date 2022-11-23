@extends('Dashboard.layout.layout')
@include('Dashboard.layout.nav')
@section('content')

                        <div class="row">
                            <div class="col-lg-12 m-auto col-md-12">
                            <div class="card mb-3 pb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                    <div class="card-body m-auto">
                                        <h4 class="card-title">Show / {{$project->title}}</h4>
                                        <div class="row ">
                                            <div class="col-6">
                                                <p class="card-text">Title : <span class="font-weight-bold text-primary">{{$project->title}}</span>  </p>
                                                <p class="card-text">Desctription : <span class="font-weight-bold text-primary">{{$project->desc}}</span>  </p>
                                            </div>
                                            <label class="mt-2 text-bold">Image</label>

                                            <div class="mb-2">
                                                <a href="{{route('imagep.delete' , $image->id)}}" style="float: right" class="btn btn-inverse-danger ">Delete This Image</a>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <a target="_blank" href="{{Storage::disk('s3')->url($image->image)}}">
                                                        <img class="card-img m-2" style="" alt="{{$project->title}}" src="{{Storage::disk('s3')->url($image->image)}}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- Edit Form --}}
                                        <form class="forms-sample" method="POST" action="{{route('imagep.doedit')}}"  enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$image->id}}">
                                            <div class="row mt-3 mb-2">
                                                <div class=" col-10  ">
                                                <input class="form-control"  type="file" name="image" accept="image/png, image/jpg, image/jpeg" >
                                                    @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                                                </div>
                                                <div class="col-2">
                                                    <button style="float: right" class="form-control btn btn-inverse-primary" type="submit">
                                                        Edit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        {{-- End Of Edit Form --}}


                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div>

@endsection
