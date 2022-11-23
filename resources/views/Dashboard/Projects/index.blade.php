@extends('Dashboard.inc.layout')

@section('content')


<div class="container bg-light p-2">
    <h4 style="display: inline-block">Projects</h4>
    <div class="row ">
        <div class="col-6  mb-1 ">
            <input class="form-control opacity-50" id="myInput" type="text" placeholder="Search Table">
        </div>
        <div class="col-6">
            <div class=" d-felx justify-content-between mb-2">
                <a class="btn btn-sm btn-dark" style="float: right" href="{{ route('project.add') }}">Add New</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table text-center">
            <thead >
                <tr >
                    <th class=" font-weight-bold text-success" scope="col">#</th>
                    <th class=" font-weight-bold text-success" scope="col">Title</th>
                    <th class=" font-weight-bold text-success" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="tableData">
                {{-- Start Fetch Data --}}
                @foreach ($projects as $project)
                    {{-- {{dd($project->admin)}} --}}
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $project->title }}</td>
                        {{-- <td><img class="rounded-circle" src="{{Storage::disk('s3')->url($project->image)}}" alt="{{ $project->name}}"></td> --}}

                        <td>
                            <a href="{{ route('project.edit', $project->id) }}" class="btn text-warning"><i
                                class="fa fa-edit "></i></a>
                        <a href="{{ route('project.delete', $project->id) }}" class="btn text-danger"><i
                                class="fa fa-trash "></i></a>
                        <a href="{{ route('project.show', $project->id) }}" class="btn text-primary"><i
                                    class="fa fa-eye "></i></a>
                        </td>
                    </tr>
                @endforeach
                {{-- End Fetch Data --}}
                <div class="d-flex justify-content-center">
                    {{ $projects->appends(request()->input())->links() }}
                </div>
            </tbody>
        </table>
    </div>
</div>
@endsection
