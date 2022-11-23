@extends('Dashboard.inc.layout')
@section('content')



<div class="container">
<div class="row bg-light p-2">
    <div class="col-12">

        <div class=" d-felx justify-content-between mb-2">
            <h4 style="display: inline-block">Services</h4>
        </div>


        <div class="row mb-1">
            <div class="col-4 mx-2 ">
                <input class="form-control opacity-50" id="myInput" type="text" placeholder="Search Table">
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#AddModal"
                        data-bs-whatever="@mdo">Add new service
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table text-center">
                <div class="row">
                    <div class="m-auto col-lg-4 col-md-12"  id="success">

                    </div>
                </div>
                <thead >
                    <tr >
                        <th class=" font-weight-bold text-primary" scope="col">#</th>
                        <th class=" font-weight-bold text-primary" scope="col">Title</th>
                        <th class=" font-weight-bold text-primary" scope="col">Icon</th>
                        <th class=" font-weight-bold text-primary" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="tableData" class="cont-data">
                    {{-- Start Fetch Data --}}
                    @foreach ($skills as $skill)
                        <tr id ={{$skill->id}}>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $skill->title }}</td>
                            <td>
                                <i class="{{ $skill->icon }}"></i></td>
                            <td>


                                <button type="button" class="btn btn-warning edit-skill" data-bs-toggle="modal" data-bs-target="#editModal"
                                data-bs-whatever="@mdo" data-route={{route('service.edit' , $skill->id)}}>Edit
                                <i class="menu-icon mdi mdi-border-color"></i>
                                </button>

                                <button type="button" class="btn btn-danger delete-skill" data-route={{route('service.delete' , $skill->id)}} >Delete
                                <i class="menu-icon mdi mdi-border-color"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                    {{-- End Fetch Data --}}
                    <div class="d-flex justify-content-center">
                        {{ $skills->appends(request()->input())->links() }}
                    </div>
                </tbody>
            </table>
        </div>






    </div>
</div>

{{-- Add Modal --}}
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="errors">
                    {{-- <li class="text-danger">any thing</li> --}}
                </ul>
                <form id="addSkill">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <textarea class="form-control" name="desc" id="desc"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputName1">Icon <span class="text-muted">(fontawsome 5)
                            <object data="FontAwsomeIcons.pdf" type="application/pdf" width="300" height="200">
                                    <a class="text-warning" style="text-decoration: none" href="{{ asset('pdfs/fa.pdf') }}">FontAwsome Icons.pdf</a>
                            </object>
                        </span> </label>
                        <label for="recipient-name" class="col-form-label">Icon:</label>
                        <input type="text" class="form-control" placeholder="fa fa-baby-carriage" name="icon" id="icon">
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="e_errors">
                    {{-- <li class="text-danger">any thing</li> --}}
                </ul>


                <form id="editSkill">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="e_title" id="e_title">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <textarea class="form-control" name="e_desc" id="e_desc"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputName1">Icon <span class="text-muted">(fontawsome 5)
                            <object data="FontAwsomeIcons.pdf" type="application/pdf" width="300" height="200">
                                    <a class="text-warning" style="text-decoration: none" href="{{ asset('pdfs/fa.pdf') }}">FontAwsome Icons.pdf</a>
                            </object>
                        </span> </label>
                        <label for="recipient-name" class="col-form-label">Icon:</label>
                        <input type="text" class="form-control" name="e_icon" id="e_icon">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Edit</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
</div>

{{-- Ajax Start --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/service.js')}}"></script>



@endsection
