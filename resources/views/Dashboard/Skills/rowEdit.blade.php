
    <th scope="row"  class="badge bg-warning">Edited</th>
    <td>{{ $skill->title }}</td>
    <td>{{ $skill->value }}</td>

    <td>


        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal"
        data-bs-whatever="@mdo">Edit
        <i class="menu-icon mdi mdi-border-color"></i>
        </button>

        <button type="button" class="btn btn-danger" >Delete
        <i class="menu-icon mdi mdi-border-color"></i>
        </button>

    </td>
