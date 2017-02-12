<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeek12sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week12s', function (Blueprint $table) {
            $table->unsignedInteger('student_id');
            $table->decimal('mini_contests', 3, 1);
            $table->decimal('team_contests', 3, 1);
            $table->decimal('homework', 3, 1);
            $table->decimal('problem_bs', 3, 1);
            $table->decimal('kattie_sets', 3, 1);
            $table->decimal('achievements', 3, 1);
            $table->timestamps();
        });
        Schema::table('week12s', function (Blueprint $table) {
            $table->primary('student_id');
            $table->foreign('student_id')->references('id')->on('students')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('week12s');
    }
}
