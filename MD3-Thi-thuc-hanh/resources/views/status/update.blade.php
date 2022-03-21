<form action="{{route('status.update',$status->id)}}" method="POST" >
    @csrf
    <div>
        Status Name:
        <input status="text" name="name" value="{{$status->name}}">
    </div>


    <div>
        <button>Update Status</button>
    </div>
</form>
