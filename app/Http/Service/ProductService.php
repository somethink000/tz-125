<?php

namespace App\Http\Services;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
//use App\Http\Requests\TaskStoreRequest;
use Exception;

class ProductService
{
    
    public function All()
    {
        $members = Product::get();
        return $members;
    }

    // public function create(TaskStoreRequest $request): Task
    // {
    //     return Task::create($request->all());
    // }


    // public function handleOwner(int $taskbox_id){
    //     //Check task owner
    //     try {
    //         $box = TaskBox::where('id', $taskbox_id)->first();
            
    //         if ($box->user_id != Auth::user()->id) {
    //             throw new Exception("The field is undefined."); 
    //         }
    //     }
    //     catch (Exception $e) {
    //         abort(404, "The Partner was not found");
    //     }
    // }
}