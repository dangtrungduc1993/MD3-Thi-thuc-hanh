<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Requests\ShopRequest;
use App\Repositories\ShopRepository;


class ShopController extends Controller
{
    public $shopRepository;
    public function __construct(ShopRepository $shopRepository)
    {

        $this->shopRepository = $shopRepository;



    }
    public function index()
    {
        $shops = $this->shopRepository->getAll();
        // $shopes = shop::all();
        // dd($shops);
        return view('shop.list', compact('shops'));
    }
    public function create()
    {
        // $categories = $this->categoryRepository->getAll();
        $statuses = Status::all();
        return view('shop.create',compact('statuses'));
    }

    public function store(ShopRequest $request)
    {
        // $statuses = Status::all();
        $this->shopRepository->store($request);
        return redirect()->route('shop.index');
    }
    public function show($id)
    {
        $shop = $this->shopRepository->getById($id);
//        dd($shop);
        return view('shop.detail', compact('shop'));

    }
    public function search()
    {
        $shops = Shop::query()
        ->where('name', 'LIKE', "%sh%")
        ->get();
//        dd($shop);
        return view('shop.search', compact('shops'));

    }
    public function edit($id)
    {
        $statuses = Status::all();
        $shop = $this->shopRepository->getById($id);
        return view('shop.update', compact('statuses','shop','id'));

    }

    public function update(shopRequest $request, $id)
    {
        $this->shopRepository->update($request,$id);
        return redirect(route('shop.index'));


    }

    public function destroy($id)
    {
        $this->shopRepository->deleteById($id);
        return redirect(route('shop.index'));

    }

    // public function getshopOfParent($id){
    //     $shops = shop::where('parent_id',$id)->get();
    //     return response()->json($shops);
    // }
}
