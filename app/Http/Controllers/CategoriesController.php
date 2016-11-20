<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionCategories;

class CategoriesController extends Controller
{
    public function index(){
    $categories=TransactionCategories::all();
    return response()->json($categories);
    }

    public function store(Request $request){
    $category = new TransactionCategories;
    $category->name =$request->name;
    $category->save();
    return Response()->json($category);
    }

     public function update(Request $request ,Task $task){
     $category=TransactionCategories::find($task->id);
     $category->name =$request->name;
     $category->save();
     return response()->json($category);
    }
}
