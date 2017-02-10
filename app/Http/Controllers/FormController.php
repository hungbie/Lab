<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class FormController extends Controller {
  public function createForm() {
    return view('create');
  }

  public function edit($id) {
    session_start();
    return view('edit')->with('data', $_SESSION["data"])->with('id', $id);
  }

  public function validateFields(Request $request) {

    $validator = Validator::make($request->all(), [ // as simple as this
      'nickname' => 'required|min:5|max:30',
      'fullname' => 'required|min:5|max:30',
      'kattisaccount' => 'required|min:5|max:30',
      'nationality' => 'required',
    ]);

    if ($validator->fails()) {
      return redirect('create') // redisplay the form
             ->withErrors($validator) // to see the error messages
             ->withInput(); // the previously entered input remains
    }

    $createdStudent = array($request->input('nationality'), $request->input('fullname'), $request->input('nickname'), 0, 0, 0, 0, 0, 0, 0, 0, 0);
    session(['createdStudent' => $createdStudent]);

    return redirect('/');
  }
}

?>
