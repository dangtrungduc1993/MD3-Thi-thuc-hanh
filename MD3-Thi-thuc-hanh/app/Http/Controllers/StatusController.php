<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Models\Status;
use App\Repositories\StatusRepository;
use Illuminate\Http\Request;


class StatusController extends Controller
{
    public $statusRepository;
    public function __construct(StatusRepository $statusRepository)
    {

        $this->statusRepository = $statusRepository;



    }
    public function index()
    {
        $statuses = $this->statusRepository->getAll();
        // $statuses = Status::all();
        dd($statuses);
        return view('status.list', compact('statuses'));
    }
    public function create()
    {
        // $categories = $this->categoryRepository->getAll();
        return view('backend.status.create');
    }

    public function store(StatusRequest $request)
    {
        $this->statusRepository->store($request);
        return redirect()->route('status.index');
    }
    public function show($id)
    {
        $status = $this->statusRepository->getById($id);
//        dd($status);
        return view('backend.status.detail', compact('status'));

    }
    public function edit($id)
    {
        $status = $this->statusRepository->getById($id);
        return view('backend.status.update', compact('status','id'));

    }

    public function update(StatusRequest $request, $id)
    {
        $this->statusRepository->update($request,$id);
        return redirect(route('status.index'));


    }

    public function destroy($id)
    {
        $this->statusRepository->deleteById($id);
        return redirect(route('status.index'));

    }

    // public function getstatusOfParent($id){
    //     $statuss = status::where('parent_id',$id)->get();
    //     return response()->json($statuss);
    // }
}
