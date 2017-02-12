<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function week1() {
	return $this->hasOne('App\Week1');
    }
    public function week2() {
        return $this->hasOne('App\Week2');
    }
    public function week3() {
        return $this->hasOne('App\Week3');
    }
    public function week4() {
        return $this->hasOne('App\Week4');
    }
    public function week5() {
        return $this->hasOne('App\Week5');
    }
    public function week6() {
        return $this->hasOne('App\Week6');
    }
    public function week7() {
        return $this->hasOne('App\Week7');
    }
    public function week8() {
        return $this->hasOne('App\Week8');
    }
    public function week9() {
        return $this->hasOne('App\Week9');
    }
    public function week10() {
        return $this->hasOne('App\Week10');
    }
    public function week11() {
        return $this->hasOne('App\Week11');
    }
    public function week12() {
        return $this->hasOne('App\Week12');
    }
}
