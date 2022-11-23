
@extends('Dashboard.inc.layout')

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card text-left">
            {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
            <div class="card-body">
              <h4 class="card-title">Hello, {{Auth::user()->name}}</h4>
              <p class="card-text">Let's start your work</p>
            </div>
          </div>
    </div>
</div>




@endsection


