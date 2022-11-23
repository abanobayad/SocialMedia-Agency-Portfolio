    <th scope="row"  class="badge bg-warning">Edited</th>

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
