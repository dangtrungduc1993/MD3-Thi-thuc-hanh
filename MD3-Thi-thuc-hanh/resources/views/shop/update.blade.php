<form action="{{route('shop.update',$shop->id)}}" method="POST" >
    @csrf
    <div>
        Shop Name:
        <input type="number" name="number" value="{{$shop->number}}">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
        <input type="text" name="name" value="{{$shop->name}}">
        <p>{{$errors->has('name')? $errors->first('name'):""}}</p>
        <input type="number" name="phone" value="{{$shop->phone}}">
        <p>{{$errors->has('phone')? $errors->first('phone'):""}}</p>
        <input type="email" name="email" value="{{$shop->email}}">
        <p>{{$errors->has('email')? $errors->first('email'):""}}</p>
        <input type="text" name="address" value="{{$shop->address}}">
        <p>{{$errors->has('address')? $errors->first('address'):""}}</p>
        <input type="text" name="manager" value="{{$shop->manager}}">
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
        <button>Update Shop</button>
    </div>
</form>

