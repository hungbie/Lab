<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student as student;
use Validator;


class FormController extends Controller {
  public function createForm(Request $getReq) {
    if ($getReq->session()->has('loginState'))
      $loginState = $getReq->session()->get('loginState');
    else $loginState = false;
    if ($loginState == false) return redirect('login');
    else return view('create');
  }

  public function edit($id, Request $getReq) {
    if ($getReq->session()->has('loginState'))
      $loginState = $getReq->session()->get('loginState');
    else $loginState = false;
	$data = array();
	  $data = student::all();
	 
	  
    if ($loginState == false) return redirect('login');
	
    else return view('edit')->with('data', $data)->with('id', $id);
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
    $s = new student;
    $s->country = $request->input('nationality');
    $s->name = $request->input('fullname');
    $s->nickname = $request->input('nickname');
    $s->mini_contests = 0;
    $s->team_contests = 0;
    $s->speed = 0;
    $s->homework = 0;
    $s->problem_bs = 0;
    $s->kattie_sets = 0;
    $s->achievements = 0;
    $s->diligence = 0;
    $s->sum = 0;
    $s->save();
    

    return redirect('/');
  }
  public function validateEdit($id, Request $request) {
  $regex = 'regex:/^[0-4]\.[0-5]/';
  $validator = Validator::make($request->all(), [ // as simple as this
      'nickname' => 'required|min:5|max:30',
      'fullname' => 'required|min:5|max:30',
      'kattisaccount' => 'required|min:5|max:30',
      'mc' => ['required', $regex],
      'tc' => ['required', $regex],
      'hw' => ['required', $regex],
      'bs' => ['required', $regex],
      'ks' => ['required', $regex],
      'ac' => ['required', $regex],
    ]);
  if ($validator->fails()) {
      return redirect('student/'.$id.'/edit') // redisplay the form
             ->withErrors($validator) // to see the error messages
             ->withInput(); // the previously entered input remains
    }
    $data = $request->session()->get('data');
    $spe = $request->input('mc')+ $request->input('tc');
    $dil = $request->input('hw')+ $request->input('bs')+ $request->input('ks')+ $request->input('ac');
    $sum = $spe + $dil;
    $createdStudent = array($request->input('nationality'), $request->input('fullname'), $request->input('nickname'), $request->input('mc'), $request->input('tc'), 
     $spe, $request->input('hw'), $request->input('bs'), $request->input('ks'), $request->input('ac'), $dil, $sum);
    $data[$id] = $createdStudent;
    $request->session()->put('data',$data);
    return redirect('/');
 }
  
 public function deleteStudent($id, Request $request){
    $data = $request->session()->get('data');
    $head = array();
    unset($data[$id]);
    $data2 = array_values($data);
    array_unshift($data2, $head);
    unset($data2[0]);
    $request->session()->put('data',$data2);
    return redirect('/');
 }
}


?>
