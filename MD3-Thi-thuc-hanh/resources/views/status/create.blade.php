<form action="{{route('status.create')}}" method="POST" >
    @csrf
    <div>
        Status Name:
        <input type="text" name="name">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
    </div>

    <div>
        <button>Create Status</button>
    </div>
</form>

