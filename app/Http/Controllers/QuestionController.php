<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{

  //GET ALL
  public function index(){
    return DB::table('question')->get();
  }

  //GET ONE
  public function show($id){
    return response()->json("get question with id = ". $id);
  }

  /** POST
  * return json response with array with field input and result
  * input: get all request from a Form
  * result: nothing
  **/
  public function store(Request $request){
    $doc = $request->all(); //data from Form obj state
    DB::table('question')->insert($doc); //use query builder to insert
  }

  /** PUT
  * return json response with array with field input and result
  * input: get all request from a Form
  * result: just plain string value to inform user, with $id from parameter
  **/
  public function update(Request $request, $id){
    return response()->json([
      "input"=>$request->all(),
      "result"=>"update question with id = ". $id. " and object from PUT data"
    ]);
  }

  /** DELETE
  * return json response string with param $id from user
  **/
  public function destroy($id){
    return response()->json("delete question with id = ". $id);
  }

}
