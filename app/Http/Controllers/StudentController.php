<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as faker;

class StudentController extends Controller
{	
	private $limit = 50;
	private $data = array();

	public function __construct() {
		$this->data = $this->getFakeData();
	}
	public function index() {
		return view('index')->with('data', $this->data)->with('limit', $this->limit);
	}
	public function detail($id) {
		return view('detail')->with('data', $this->data)->with('id', $id);
	}
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
