
<form action=""method="post">
    <input type="text"name="name">
    <input type="submit" value="Tìm Kiếm">
</form>
{{-- <a href="{{route('shop.showFormCreate')}}">Create shop</a> --}}

<table border="1">
    <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Manager</th>
            <th>Status</th>

            <th colspan="3">Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($shops as $shop)
        <tr>
            <td>{{$shop->number}}</td>
            <td>{{$shop->name}}</td>
            <td>{{$shop->phone}}</td>
            <td>{{$shop->email}}</td>
            <td>{{$shop->address}}</td>
            <td>{{$shop->manager}}</td>
            <td>{{$shop->status->name}}</td>
            {{-- <td><a href="{{route('shop.showFormUpdate',$shop->id)}}">Update</a></td>
            <td><a onclick="return confirm('Are you sure')" href="{{route('shop.delete',$shop->id)}}">Delete</a></td>
            <td><a href="{{route('shop.detail',$shop->id)}}">Detail</a></td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
