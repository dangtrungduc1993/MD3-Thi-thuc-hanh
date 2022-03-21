<?php

namespace App\Repositories;
use App\Models\Shop;
use http\Env\Request;

class ShopRepository extends BaseRepository
{
//    public $table = 'shops';
    public function getModel()
    {
        return Shop::class;
    }

    public function store($request)
    {
        $shop = new Shop();
        $shop->number = $request->number;
        $shop->name = $request->name;
        $shop->phone = $request->phone;
        $shop->email = $request->email;
        $shop->address = $request->address;
        $shop->manager = $request->manager;
        $shop->status_id = $request->status;

        $shop->save();

    }

    public function update($request,$id)
    {
        $shop = Shop::find($id);
        $shop->number = $request->number;
        $shop->name = $request->name;
        $shop->phone = $request->phone;
        $shop->email = $request->email;
        $shop->address = $request->address;
        $shop->manager = $request->manager;
        $shop->status_id = $request->status;

        $shop->save();
    }

}





