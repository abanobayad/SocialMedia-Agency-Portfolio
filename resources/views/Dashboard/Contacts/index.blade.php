@extends('Dashboard.inc.layout')

@section('content')

<div class="container bg-gray-200">
    <div class="row">
        <div class="col-12">
            <div class=" d-felx justify-content-between mb-2">
                <h4 style="display: inline-block">Contacts</h4>
            </div>


            <div class="row">
                <div class="col-12  mb-1">
                    <input class="form-control opacity-50" id="myInput" type="text" placeholder="Search Table">
                </div>
            </div>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead >
                        <tr >
                            <th class=" font-weight-bold text-primary" scope="col">#</th>
                            <th class=" font-weight-bold text-primary" scope="col">Name</th>
                            <th class=" font-weight-bold text-primary" scope="col">Email</th>
                            <th class=" font-weight-bold text-primary" scope="col">Time</th>
                            <th class=" font-weight-bold text-primary" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tableData">
                        {{-- Start Fetch Data --}}
                        @foreach ($contacts as $contact)
                            {{-- {{dd($contact->admin)}} --}}
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->created_at->diffForHumans()}} <i class="fa fa-timer"></i></td>
                                <td>
                                <a href="{{ route('contact.delete', $contact->id) }}" class="btn text-danger"><i
                                    class="fa fa-trash "></i></a>
                                <a href="{{ route('contact.show', $contact->id) }}" class="btn text-primary"><i
                                    class="fa fa-eye "></i></a>
                                </td>

                        {{-- <td>
                            <a href="{{ route('project.edit', $project->id) }}" class="btn text-warning"><i
                                class="fa fa-edit "></i></a>
                        <a href="{{ route('project.delete', $project->id) }}" class="btn text-danger"><i
                                class="fa fa-trash "></i></a>
                        <a href="{{ route('project.show', $project->id) }}" class="btn text-primary"><i
                                    class="fa fa-eye "></i></a>
                        </td> --}}
                            </tr>
                        @endforeach
                        {{-- End Fetch Data --}}
                        <div class="d-flex mt-2 justify-content-center">
                            {{ $contacts->appends(request()->input())->links() }}
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tableData tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection
