<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as faker;
use Validator;
session_start();

class StudentController extends Controller {

	
	private $limit = 50;
	private $data = array();

	public function __construct() {
		$this->data = $this->getFakeData();

	}
	public function index(Request $getReq) {
		if ($getReq->session()->has('loginState'))
			$loginState = $getReq->session()->get('loginState');
		else $loginState = false;
		return view('index')->with('data', $this->data)->with('limit', $this->limit)->with('loginState', $loginState);
	}
	public function detail($id, Request $getReq) {
		if ($getReq->session()->has('loginState'))
			$loginState = $getReq->session()->get('loginState');
		else $loginState = false;
		return view('detail')->with('data', $this->data)->with('id', $id)->with('loginState', $loginState);
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
      		'password' => 'required',
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
// =======
// {
// 	private $limit = 50;
//
// 	public function __construct() {
// 		session_start();
// 	}
//
// 	public function index() {
// 		$_SESSION["data"] = $this->getFakeData();
// 		if (session('createdStudent') != NULL) {
// 			$_SESSION["data"][] = session('createdStudent');
// 			session(['createdStudent' => NULL]);
// 		}
//
// 		return view('index')->with('data', $_SESSION["data"])->with('limit', count($_SESSION["data"]));
// 	}
//
// 	public function detail($id) {
// 		return view('detail')->with('data', $_SESSION["data"])->with('id', $id);
// >>>>>>> Non-persisent create using session
	// }

	public function getFakeData() {
		$faker = faker::create();
		$faker->seed(123);
		$array = array();
		for ($i = 1; $i <= $this->limit; $i++) {
			$student = array(
				$faker->countryCode,
				$faker->name,
				$faker->firstName,
				$faker->randomDigit,
				$faker->randomDigit,
				0,
				$faker->randomDigit,
				$faker->randomDigit,
				$faker->randomDigit,
				$faker->randomDigit,
				0);
			$student[5] = $student[3] + $student[4];
			$student[10] = $student[6] + $student[7] + $student[8] + $student[9];
			$student[11] = $student[5] + $student[10];
			$array[$i] = $student;
		}
		return $array;
	}
}
?>
