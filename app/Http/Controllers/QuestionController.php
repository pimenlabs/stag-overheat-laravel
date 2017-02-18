<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{

  //GET ALL
  public function index(Request $request){
    //get ?search=search as request if exists, else empty string ("")
    $search = $request->query()?$request->query()['search']:"";

    //return result like title or like description
    return DB::table('question')
      ->where('title', 'like', $search.'%')
      ->orWhere('description', 'like', $search.'%')
      ->get();
  }

  //GET ONE
  public function show($id){
    $question =  DB::table('question')
      ->where('id', $id)
      ->first();
    return response()->json($question);
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
  * result: just plain string success
  **/
  public function update(Request $request, $id){
    $doc = $request->all();
    DB::table('question')
            ->where('id', $id)
            ->update($doc);

    return response()->json("success");
  }

  /** DELETE
  * return json response string with param $id from user
  **/
  public function destroy($id){
    return response()->json("delete question with id = ". $id);
  }

}
