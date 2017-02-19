<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{

    //GET ALL ANSWER base on questionId (ONE TO MANY)
    public function index(Request $request, $questionId){
      /**
      * return result answers where questionId from parameter
      **/
      return DB::table('answer')
        ->where('questionId', $questionId)
        ->get();
    }

    //POST
    public function store(Request $request, $questionId){
      $doc = $request->all(); //data from Form obj state
      $doc['questionId'] = (int)$questionId; //cast string param to integer
      DB::table('answer')->insert($doc); //use query builder to insert
      return response()->json('success'); //tell that storing data success
    }

}
