<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{

  public function index(){
    echo "this is question page";
  }

  public function show($id){
    echo "get question with id = ". $id;
  }

}
