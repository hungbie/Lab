<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('name');
            $table->string('nickname');
            $table->decimal('mini_contests', 3, 1);
            $table->decimal('team_contests', 3, 1);
            $table->decimal('speed', 4, 1);
            $table->decimal('homework', 3, 1);
            $table->decimal('problem_bs', 3, 1);
            $table->decimal('kattie_sets', 3, 1);
            $table->decimal('achievements', 3, 1);
            $table->decimal('diligence', 4, 1);
            $table->decimal('sum', 5, 1);
            $table->timestamps();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
