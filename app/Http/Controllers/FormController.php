<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student as student;
use Guzzle\Tests\Plugin\Redirect;
use App\Image as image;
use Illuminate\Support\Facades\Input;
use App\Week1 as week1;
use App\Week2 as week2;
use App\Week3 as week3;
use App\Week4 as week4;
use App\Week5 as week5;
use App\Week6 as week6;
use App\Week7 as week7;
use App\Week8 as week8;
use App\Week9 as week9;
use App\Week10 as week10;
use App\Week11 as week11;
use App\Week12 as week12;
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

    $detail = $this->formatDataForInputFields($id);
	  
    if ($loginState == false) return redirect('login');
	
    else return view('edit')->with('data', $detail)->with('id', $id);
  }

  private function formatDataForInputFields($id) {
      $s = student::find($id);
      $weeks = array (week1::find($id), week2::find($id), week3::find($id),
          week4::find($id), week5::find($id), week6::find($id), week7::find($id),
          week8::find($id), week9::find($id), week10::find($id), week11::find($id),
          week12::find($id));

      $formattedData = array(
          'name' => $s['name'],
          'nickname' => $s['nickname'],
          'mini_contests' => '',
          'team_contests' => '',
          'homework' => '',
          'problem_bs' => '',
          'kattie_sets' => '',
          'achievements' => ''
      );

      for($i = 0; $i < 12; $i++) {
          $formattedData['mini_contests'] = $formattedData['mini_contests'] . $weeks[$i]['mini_contests'] . ($i < 11 ? "," : "");
          $formattedData['team_contests'] = $formattedData['team_contests'] . $weeks[$i]['team_contests'] . ($i < 11 ? "," : "");
          $formattedData['homework'] = $formattedData['homework'] . $weeks[$i]['homework'] . ($i < 11 ? "," : "");
          $formattedData['problem_bs'] = $formattedData['problem_bs'] . $weeks[$i]['problem_bs'] . ($i < 11 ? "," : "");
          $formattedData['kattie_sets'] = $formattedData['kattie_sets'] . $weeks[$i]['kattie_sets'] . ($i < 11 ? "," : "");
          $formattedData['achievements'] = $formattedData['achievements'] . $weeks[$i]['achievements'] . ($i < 11 ? "," : "");
      }

      return $formattedData;
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
      $week1 = new week1;
    $week1->student_id=$s->id;
    $week1->mini_contests = 0;
    $week1->team_contests = 0;
    $week1->homework = 0;
    $week1->problem_bs=0;
    $week1->kattie_sets=0;
    $week1->achievements=0;
    $week1->save();
     $week2 = new week2;
     $week2->student_id=$s->id;
    $week2->mini_contests = 0;
    $week2->team_contests = 0;
    $week2->homework = 0;
    $week2->problem_bs=0;
    $week2->kattie_sets=0;
    $week2->achievements=0;
    $week2->save();
     $week3 = new week3;
      $week3->student_id=$s->id;
    $week3->mini_contests = 0;
    $week3->team_contests = 0;
    $week3->homework = 0;
    $week3->problem_bs=0;
    $week3->kattie_sets=0;
    $week3->achievements=0;
    $week3->save();
     $week4 = new week4;
      $week4->student_id=$s->id;
    $week4->mini_contests = 0;
    $week4->team_contests = 0;
    $week4->homework = 0;
    $week4->problem_bs=0;
    $week4->kattie_sets=0;
    $week4->achievements=0;
    $week4->save();
     $week5 = new week5;
      $week5->student_id=$s->id;
    $week5->mini_contests = 0;
    $week5->team_contests = 0;
    $week5->homework = 0;
    $week5->problem_bs=0;
    $week5->kattie_sets=0;
    $week5->achievements=0;
    $week5->save();
     $week6 = new week6;
      $week6->student_id=$s->id;
    $week6->mini_contests = 0;
    $week6->team_contests = 0;
    $week6->homework = 0;
    $week6->problem_bs=0;
    $week6->kattie_sets=0;
    $week6->achievements=0;
    $week6->save();
     $week7 = new week7;
      $week7->student_id=$s->id;
    $week7->mini_contests = 0;
    $week7->team_contests = 0;
    $week7->homework = 0;
    $week7->problem_bs=0;
    $week7->kattie_sets=0;
    $week7->achievements=0;
    $week7->save();
     $week8 = new week8;
      $week8->student_id=$s->id;
    $week8->mini_contests = 0;
    $week8->team_contests = 0;
    $week8->homework = 0;
    $week8->problem_bs=0;
    $week8->kattie_sets=0;
    $week8->achievements=0;
    $week8->save();
     $week9 = new week9;
      $week9->student_id=$s->id;
    $week9->mini_contests = 0;
    $week9->team_contests = 0;
    $week9->homework = 0;
    $week9->problem_bs=0;
    $week9->kattie_sets=0;
    $week9->achievements=0;
    $week9->save();
     $week10 = new week10;
      $week10->student_id=$s->id;
    $week10->mini_contests = 0;
    $week10->team_contests = 0;
    $week10->homework = 0;
    $week10->problem_bs=0;
    $week10->kattie_sets=0;
    $week10->achievements=0;
    $week10->save();
     $week11 = new week11;
      $week11->student_id=$s->id;
    $week11->mini_contests = 0;
    $week11->team_contests = 0;
    $week11->homework = 0;
    $week11->problem_bs=0;
    $week11->kattie_sets=0;
    $week11->achievements=0;
    $week11->save();
     $week12 = new week12;
      $week12->student_id=$s->id;
    $week12->mini_contests = 0;
    $week12->team_contests = 0;
    $week12->homework = 0;
    $week12->problem_bs=0;
    $week12->kattie_sets=0;
    $week12->achievements=0;
    $week12->save();
	if($request->hasFile('image')) {
        $image = new image;
      
        $image->student_id = $s->id;
        
            $file = Input::file('image');
            $ext = $request->file('image')->getClientOriginalExtension();
            
            $name = $s->id . '.' . $ext;
            
            $image->filePath = $name;

            $file->move(public_path().'/images/', $name);
        }
        $image->save();
    return redirect('/');
  }
  public function validateEdit($id, Request $request) {
  $regex = 'regex:/^[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05],[0-4]\.[05]/';
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
  $mc = array();
    $tc = array();
    $hw = array();
    $bs = array();
    $ks = array();
    $ac = array();
    $mcSum = 0;
    $tcSum = 0;
    $hwSum = 0;
    $bsSum = 0;
    $ksSum = 0;
    $acSum = 0;
    preg_match('/([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5])/', $request->input('mc'),$mc);
    preg_match('/([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5])/', $request->input('tc'),$tc);
    preg_match('/([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5])/', $request->input('hw'),$hw);
    preg_match('/([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5])/', $request->input('bs'),$bs);
    preg_match('/([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5])/', $request->input('ks'),$ks);
    preg_match('/([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5]),([0-4]\.[0-5])/', $request->input('ac'),$ac);
    $spe = array_fill(0,13,0);
    $dil = array_fill(0,13,0);
    $sum = array_fill(0,13,0);
    for($i = 1; $i <= 12; $i++){
      $spe[$i] = $mc[$i] + $tc[$i];
      $dil[$i] = $hw[$i] + $bs[$i] + $ks[$i] + $ac[$i];
      $sum[$i] = $spe[$i] + $dil[$i];
      $mcSum += $mc[$i];
      $tcSum += $tc[$i];
      $hwSum += $hw[$i];
      $bsSum += $bs[$i];
      $ksSum += $ks[$i];
      $acSum += $ac[$i];
    }
   
    $s = student::find($id);
    $week1 = week1::find($id);
    $week2 = week2::find($id);
    $week3 = week3::find($id);
    $week4 = week4::find($id);
    $week5 = week5::find($id);
    $week6 = week6::find($id);
    $week7 = week7::find($id);
    $week8 = week8::find($id);
    $week9 = week9::find($id);
    $week10 = week10::find($id);
    $week11 = week11::find($id);
    $week12 = week12::find($id);
    $s->name = $request->input('fullname');
    $s->nickname = $request->input('nickname');
    $s->mini_contests=$mcSum;
    $s->team_contests=$tcSum;
    $s->homework=$hwSum;
    $s->problem_bs=$bsSum;
    $s->kattie_sets=$ksSum;
    $s->achievements=$acSum;
	  $s->speed=$mcSum + $tcSum;
    $s->diligence=$hwSum + $bsSum + $ksSum + $acSum;
    $s->sum = $s->speed + $s->diligence;
    $s->save();
    
    $week1->mini_contests=$mc[1];
    $week1->team_contests=$tc[1];
    $week1->homework=$hw[1];
    $week1->problem_bs=$bs[1];
    $week1->kattie_sets=$ks[1];
    $week1->achievements=$ac[1];
    $week1->save();

     $week2->mini_contests=$mc[2];
    $week2->team_contests=$tc[2];
    $week2->homework=$hw[2];
    $week2->problem_bs=$bs[2];
    $week2->kattie_sets=$ks[2];
    $week2->achievements=$ac[2];
    $week2->save();
     $week3->mini_contests=$mc[3];
    $week3->team_contests=$tc[3];
    $week3->homework=$hw[3];
    $week3->problem_bs=$bs[3];
    $week3->kattie_sets=$ks[3];
    $week3->achievements=$ac[3];
    $week3->save();
     $week4->mini_contests=$mc[4];
    $week4->team_contests=$tc[4];
    $week4->homework=$hw[4];
    $week4->problem_bs=$bs[4];
    $week4->kattie_sets=$ks[4];
    $week4->achievements=$ac[4];
    $week4->save();
     $week5->mini_contests=$mc[5];
    $week5->team_contests=$tc[5];
    $week5->homework=$hw[5];
    $week5->problem_bs=$bs[5];
    $week5->kattie_sets=$ks[5];
    $week5->achievements=$ac[5];
    $week5->save();
     $week6->mini_contests=$mc[6];
    $week6->team_contests=$tc[6];
    $week6->homework=$hw[6];
    $week6->problem_bs=$bs[6];
    $week6->kattie_sets=$ks[6];
    $week6->achievements=$ac[6];
    $week6->save();
     $week7->mini_contests=$mc[7];
    $week7->team_contests=$tc[7];
    $week7->homework=$hw[7];
    $week7->problem_bs=$bs[7];
    $week7->kattie_sets=$ks[7];
    $week7->achievements=$ac[7];
    $week7->save();
     $week8->mini_contests=$mc[8];
    $week8->team_contests=$tc[8];
    $week8->homework=$hw[8];
    $week8->problem_bs=$bs[8];
    $week8->kattie_sets=$ks[8];
    $week8->achievements=$ac[8];
    $week8->save();
     $week9->mini_contests=$mc[9];
    $week9->team_contests=$tc[9];
    $week9->homework=$hw[9];
    $week9->problem_bs=$bs[9];
    $week9->kattie_sets=$ks[9];
    $week9->achievements=$ac[9];
    $week9->save();
     $week10->mini_contests=$mc[10];
    $week10->team_contests=$tc[10];
    $week10->homework=$hw[10];
    $week10->problem_bs=$bs[10];
    $week10->kattie_sets=$ks[10];
    $week10->achievements=$ac[10];
    $week10->save();
     $week11->mini_contests=$mc[11];
    $week11->team_contests=$tc[11];
    $week11->homework=$hw[11];
    $week11->problem_bs=$bs[11];
    $week11->kattie_sets=$ks[11];
    $week11->achievements=$ac[11];
    $week11->save();
     $week12->mini_contests=$mc[12];
    $week12->team_contests=$tc[12];
    $week12->homework=$hw[12];
    $week12->problem_bs=$bs[12];
    $week12->kattie_sets=$ks[12];
    $week12->achievements=$ac[12];
    $week12->save();
    return redirect('/');
 }
  
 public function deleteStudent($id, Request $request){
    $toDel = student::find($id);
    $toDel->delete();
	
    return redirect('/');
 }
}


?>
