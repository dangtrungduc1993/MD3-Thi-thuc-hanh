<form action="{{route('shop.create')}}" method="POST" >
    @csrf
    <div>
        Shop Number:
        <input type="number" name="number">
        <p>{{$errors->has('number')? $errors->first('number'):""}}</p>
        Shop Name:
        <input type="text" name="name">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
        Shop Phone:
        <input type="number" name="phone">
        <p>{{$errors->has('phone')? $errors->first('phone'):""}}</p>
        Shop Email:
        <input type="email" name="email">
        <p>{{$errors->has('email')? $errors->first('email'):""}}</p>
        Shop Address:
        <input type="text" name="address">
        <p>{{$errors->has('address')? $errors->first('address'):""}}</p>
        Shop Manager:
        <input type="text" name="manager">
        <p>{{$errors->has('manager')? $errors->first('manager'):""}}</p>
        <div>
            Select Status:
            <select name="status" id="">
                @foreach($statuses as $status)
                <option value="{{$status->id}}">{{$status->name}}</option>
                @endforeach
            </select>
            {{-- <input shop="text" name="shop_id" value="2" hidden> --}}
        </div>
        <p>{{$errors->has('status')? $errors->first('status'):""}}</p>

    </div>

    <div>
        <button>Create Shop</button>
    </div>
</form>

