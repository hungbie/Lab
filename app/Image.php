<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey = 'student_id';
    public function Student() {
	return $this->belongsTo('App\Student', 'student_id');
    }
}
