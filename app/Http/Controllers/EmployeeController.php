<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getEmployee(Request $request){

    $emp = Employee::all();
     return response()->json($emp,200);
 }

 public function getSinglEmployee(Request $request,$id){

    $emp = Employee::find($id);
    if(is_null($emp)){
        return response()->json(['message'=>'Emplyee NOt found'],404);
    }
    return response()->json($emp,200);
 }

 public function addEmployee(Request $request){

    $emp = Employee::create($request->all());

    return response($emp,201);
 }

 public function editEmployee(Request $request,$id){

    $emp = Employee::find($id);
    if(is_null($emp)){
        return response()->json(['message'=>'Emplyee NOt found'],404);
    }
    $emp->update($request->all());
    return response($emp,200);
 }

 public function deleteEmployee(Request $request,$id){

    $emp = Employee::find($id);
    if(is_null($emp)){
        return response()->json(['message'=>'Emplyee NOt found'],404);
    }
    $emp->delete();
    return response(null,204);
     }
}
