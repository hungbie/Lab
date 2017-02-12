<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as faker;
use App\Student as student;
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

class StudentController extends Controller {
	
	private $limit = 50;
	private $data = array();

	public function __construct() {
		$this->data = student::all();
	}
	public function index(Request $getReq) {
		if ($getReq->session()->has('loginState'))
			$loginState = $getReq->session()->get('loginState');
		else $loginState = false;
		return view('index')->with('data', $this->data)->with('limit', sizeof($this->data))->with('loginState', $loginState);
	}
	public function detail($id, Request $getReq) {
		if ($getReq->session()->has('loginState'))
			$loginState = $getReq->session()->get('loginState');
		else $loginState = false;
		$detail = student::find($id);
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
		return view('detail')
			->with('data', $detail)
			->with('id', $id)
			->with('loginState', $loginState)
			->with('week1', $week1)
                        ->with('week2', $week2)
                        ->with('week3', $week3)
                        ->with('week4', $week4)
                        ->with('week5', $week5)
                        ->with('week6', $week6)
                        ->with('week7', $week7)
                        ->with('week8', $week8)
                        ->with('week9', $week9)
                        ->with('week10', $week10)
                        ->with('week11', $week11)
                        ->with('week12', $week12);
	}
	public function help(Request $getReq){
		if ($getReq->session()->has('loginState'))
			$loginState = $getReq->session()->get('loginState');
		else $loginState = false;
		return view('help')->with('loginState', $loginState);
	}
	public function login(Request $getReq){
		if ($getReq->session()->has('loginState'))
			$loginState = $getReq->session()->get('loginState');
		else $loginState = false;
		if ($loginState) return view('loggedIn');
		else return view('login');
	}
	public function logout(Request $getReq){
		if ($getReq->session()->has('loginState')){
			$loginState = $getReq->session()->get('loginState');
			$getReq->session()->forget('loginState');
		}
		else $loginState = false;
		return view('logout');
	}
	public function check(Request $loginReq) {
		 $validator = Validator::make($loginReq->all(), [ // as simple as this
      		'userID' => 'required',
      		'password' => 'required'
    	]);
		 if ($validator->fails()) {
     		 return redirect('login') // redisplay the form
             ->withErrors($validator) // to see the error messages
             ->withInput(); // the previously entered input remains
   		}
		$user = $loginReq->input('userID');
		$pass = $loginReq->input('password');
		$error = array();
		$userPass = true;
		$passwordPass = true;
		//Should store in a separate encrypted file for better security
		if ($user != "admin") {
			$userPass = false;
		}
		if ($pass != "admin"){
			$passwordPass = false;
		}
		if ($userPass == false || $passwordPass == false){
			return redirect('login')
			 ->withErrors("Incorrect username or password")
			 ->withInput();
		}
		else {
			$loginReq->session()->put('loginState',true);
			return view('loggedIn');
		}
	}
}
?>
