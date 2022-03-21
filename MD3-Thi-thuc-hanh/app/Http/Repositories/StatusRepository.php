<?php

namespace App\Repositories;

use App\Models\Status;
use http\Env\Request;

class StatusRepository extends BaseRepository
{
//    public $table = 'statuss';
    public function getTable()
    {
        return 'statuses';
    }

    public function store($request)
    {
        $status = new Status();
        $status->name = $request->name;
        // $status->description = $request->name;
        // $status->parent_id = $request->parent_id;
        $status->save();

    }

    public function update($request,$id)
    {
        $status = Status::find($id);

        $status->name = $request->name;
        // $status->description = $request->name;
        // $status->parent_id = $request->parent_id;
        $status->save();
    }

}
