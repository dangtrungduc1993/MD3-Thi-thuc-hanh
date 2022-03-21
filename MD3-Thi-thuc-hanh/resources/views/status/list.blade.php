<a href="{{route('status.showFormCreate')}}">Create status</a>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="7">Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($statuses as $status)
        <tr>
            <td>{{$status->name}}</td>
            <td><a href="{{route('status.showFormUpdate',$status->id)}}">Update</a></td>
            <td><a onclick="return confirm('Are you sure')" href="{{route('status.delete',$status->id)}}">Delete</a></td>
            <td><a href="{{route('status.detail',$status->id)}}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
