<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
      // local vars
      $value = 123;
      $name = $request->input('name');
      $result = "SUCCESS";

      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      return $result;
    }
}
