<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->char('subject',1);
            $table->text('ques',4096);
            $table->boolean('istxt_ques')->default(true);
            $table->text('op1',4096);
            $table->boolean('istxt_op1')->default(true);
            $table->text('op2',4096);
            $table->boolean('istxt_op2')->default(true);
            $table->text('op3',4096);
            $table->boolean('istxt_op3')->default(true);
            $table->text('op4',4096);
            $table->boolean('istxt_op4')->default(true);
            $table->text('op5',4096)->nullable();
            $table->boolean('istxt_op5')->default(true);
            $table->text('op6',4096)->nullable();
            $table->boolean('istxt_op6')->default(true);
            $table->boolean('iscorrect_op1')->default(false);
            $table->boolean('iscorrect_op2')->default(false);
            $table->boolean('iscorrect_op3')->default(false);
            $table->boolean('iscorrect_op4')->default(false);
            $table->boolean('iscorrect_op5')->default(false);
            $table->boolean('iscorrect_op6')->default(false);
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
        Schema::dropIfExists('questions');
    }
}
