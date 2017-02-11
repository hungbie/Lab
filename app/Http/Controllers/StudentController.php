<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as faker;
use App\Student as student;
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
		return view('detail')->with('data', $detail)->with('id', $id)->with('loginState', $loginState);
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
