@extends('Dashboard.inc.layout')


@section('content')
            <div class="col-lg-6 col-md-12 grid-margin stretch-card m-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Setting of {{Auth()->user()->name}}</h4>
                        <p class="card-description"> Edit {{Auth()->user()->name}} information </p>
                        <form class="forms-sample" method="POST" action="{{route('setting.doedit')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{Auth()->user()->id}}">
                            <div class="form-group mb-3 m-auto">
                                <label  class="form-label">Current Image</label>
                                <div class="row">
                                    <div class="col-6 m-auto mb-2">
                                        @if (Auth()->user()->image == null)
                                        No Avatar
                                        @else
                                        <img  style="object-fit:cover ;width: 200px ; height: 200px;" src="{{Storage::disk('s3')->url(Auth()->user()->image)}}" alt="{{Auth()->user()->name}}" class="mb-3 col-12 rounded-circle m-auto">
                                        @endif
                                    </div>
                                </div>
                                    <div><input class="form-control"  type="file" name="image" accept="image/png, image/jpg, image/jpeg" value="{{Auth()->user()->name}}"></div>
                                    @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" name="name" value="{{ Auth()->user()->name }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" name="email" value="{{ Auth()->user()->email }}"
                                    class="form-control">
                            </div>


                            <div class="card p-2 mb-3">
                                <p class="card-description">
                                    Change Your password
                                </p>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                    <input type="password" class="form-control"  name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-dark me-2" style="float: right">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
@endsection

