<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once '/var/www/html/lab/vendor/fzaninotto/faker/src/autoload.php';

class StudentController extends Controller
{	
	private $limit = 50;
	private $array = array();

	public function __construct() {
		$this->$array = $this->getFakeData();
	}
	public function index() {return view('index', $this->$array); }
	public function detail() {return view('detail', $this->$array); }
	public function getFakeData() {
		$faker = Faker\Factory::create();
		$array = array();
		for ($i = 0; i < $limit; $i++) {
			$student = array(
				$faker->country,
				$faker->name,
				$faker->firstName,
				$faker->randomDigit,
				$faker->randomDigit,
				$faker->randomDigit,
				$faker->randomDigit,
				$faker->randomDigit,
				$faker->randomDigit,
				$faker->randomDigit,
				$faker->randomDigit);
			$student[11] = $student[3] + $student[4] + $student[5] + $student[6]
				+ $student[7] + $student[8] + $student[9] + $student[10];
			$array[$i] = $student;
		}
		return $array;
	}
}
?>
